<?php
session_start();
require_once '../db_config.php'; 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

$page_title = 'Admin Dashboard | Ubuntu Haven';
$hero_image = '../img/image.webp'; 
include '../includes/header.php'; 

try {
    $stmt = $pdo->query("SELECT COUNT(*) FROM bookings WHERE MONTH(check_in) = MONTH(CURRENT_DATE()) AND YEAR(check_in) = YEAR(CURRENT_DATE())");
    $monthly_bookings = $stmt->fetchColumn();

    
    $stmt = $pdo->query("SELECT COUNT(*) FROM users");
    $total_users = $stmt->fetchColumn();
} catch (PDOException $e) { $monthly_bookings = 0; $total_users = 0; }

try {
    $stmt = $pdo->query("SELECT b.*, u.username, u.email FROM bookings b JOIN users u ON b.user_id = u.id ORDER BY b.check_in ASC");
    $all_bookings = $stmt->fetchAll();
} catch (PDOException $e) { $error = "Could not fetch bookings."; }

try {
    $stmt = $pdo->query("SELECT id, username, email, role, created_at FROM users ORDER BY created_at DESC");
    $all_users = $stmt->fetchAll();
} catch (PDOException $e) { $user_error = "Could not fetch users."; }

try {
    $stmt = $pdo->query("SELECT * FROM room_types ORDER BY price_per_night ASC");
    $room_prices = $stmt->fetchAll();
} catch (PDOException $e) { $price_error = "Could not fetch prices."; }
?>

      <div class="hero__content">
        <h1 class="hero__title">Resort Management</h1>
      </div>
    </header>

    <main id="main-content" class="section">
      <div class="container">
          
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
              <h2 class="text-heading-large primary-color">Admin Control Panel</h2>
              <a href="../auth/logout.php" class="button-outline" style="border-color: red; color: red;">Admin Logout</a>
          </div>

          <div style="display: flex; gap: 24px; margin-bottom: 40px; flex-wrap: wrap;">
              <div style="flex: 1; min-width: 200px; background: #1a1a1a; padding: 32px; border-radius: 8px; text-align: center; border-bottom: 4px solid var(--primary-01); box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                  <h3 style="font-size: 13px; color: #e0e0e0; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; font-family: var(--font-family-body);">Monthly Bookings</h3>
                  <p style="font-size: 64px; font-weight: 800; margin-top: 16px; color: var(--primary-01); font-family: var(--font-family-heading); line-height: 1; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"><?php echo $monthly_bookings; ?></p>
              </div>
              <div style="flex: 1; min-width: 200px; background: #1a1a1a; padding: 32px; border-radius: 8px; text-align: center; border-bottom: 4px solid var(--primary-01); box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                  <h3 style="font-size: 13px; color: #e0e0e0; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; font-family: var(--font-family-body);">Total Registered Users</h3>
                  <p style="font-size: 64px; font-weight: 800; margin-top: 16px; color: var(--primary-01); font-family: var(--font-family-heading); line-height: 1; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"><?php echo $total_users; ?></p>
              </div>
          </div>
          
          <div style="display: flex; gap: 40px; flex-wrap: wrap;">
              
              <div style="flex: 2; min-width: 300px;">
                  <h3 class="text-heading-medium" style="margin-bottom: 16px;">Manage Reservations</h3>
                  <div style="background: #f9f9f9; padding: 24px; border-radius: 8px; overflow-x: auto; margin-bottom: 40px;">
                      <?php if (isset($error)): ?><p style="color: red;"><?php echo $error; ?></p>
                      <?php elseif (count($all_bookings) > 0): ?>
                          <table style="width: 100%; border-collapse: collapse; text-align: left;">
                              <tr style="border-bottom: 2px solid var(--primary-02);">
                                  <th style="padding: 12px 8px;">Guest</th>
                                  <th style="padding: 12px 8px;">Room</th>
                                  <th style="padding: 12px 8px;">Dates</th>
                                  <th style="padding: 12px 8px;">Status</th>
                                  <th style="padding: 12px 8px;">Actions</th>
                              </tr>
                              <?php foreach ($all_bookings as $booking): ?>
                              <tr style="border-bottom: 1px solid #ccc;">
                                  <td style="padding: 12px 8px;"><strong><?php echo htmlspecialchars($booking['username']); ?></strong></td>
                                  <td style="padding: 12px 8px;"><?php echo htmlspecialchars($booking['room_type']); ?></td>
                                  <td style="padding: 12px 8px; font-size: 14px;">In: <?php echo htmlspecialchars($booking['check_in']); ?><br>Out: <?php echo htmlspecialchars($booking['check_out']); ?></td>
                                  <td style="padding: 12px 8px; font-weight: bold; color: <?php echo ($booking['status'] == 'confirmed') ? 'green' : (($booking['status'] == 'cancelled') ? 'red' : 'orange'); ?>;">
                                      <?php echo ucfirst(htmlspecialchars($booking['status'])); ?>
                                  </td>
                                  <td style="padding: 12px 8px; display: flex; gap: 8px;">
                                      <?php if ($booking['status'] == 'pending'): ?>
                                          <form action="update_status.php" method="POST" style="margin: 0;"><input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>"><input type="hidden" name="new_status" value="confirmed"><button type="submit" style="background: green; color: white; border: none; padding: 4px 8px; border-radius: 4px; cursor: pointer;">Approve</button></form>
                                          <form action="update_status.php" method="POST" style="margin: 0;"><input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>"><input type="hidden" name="new_status" value="cancelled"><button type="submit" style="background: red; color: white; border: none; padding: 4px 8px; border-radius: 4px; cursor: pointer;">Reject</button></form>
                                      <?php else: ?><span style="color: #999;">Resolved</span><?php endif; ?>
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                          </table>
                      <?php else: ?><p>No bookings yet.</p><?php endif; ?>
                  </div>
              </div>

              <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column; gap: 40px;">
                  
                  <div>
                      <h3 class="text-heading-medium" style="margin-bottom: 16px;">Room Pricing (ZAR)</h3>
                      <div style="background: #262626; color: white; padding: 24px; border-radius: 8px;">
                          <?php if (isset($price_error)): ?><p style="color: red;"><?php echo $price_error; ?></p>
                          <?php elseif (!empty($room_prices)): ?>
                              <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                                  <?php foreach ($room_prices as $room): ?>
                                  <tr style="border-bottom: 1px solid #444;">
                                      <td style="padding: 12px 0;"><?php echo htmlspecialchars($room['name']); ?></td>
                                      <td style="padding: 12px 0; text-align: right;">
                                          <form action="update_price.php" method="POST" style="display: flex; justify-content: flex-end; gap: 8px; margin: 0;">
                                              <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">
                                              R <input type="number" step="0.01" name="new_price" value="<?php echo htmlspecialchars($room['price_per_night']); ?>" style="width: 80px; padding: 4px; border: 1px solid #666; background: #333; color: white; border-radius: 4px;">
                                              <button type="submit" style="background: var(--primary-01); color: white; border: none; padding: 4px 8px; border-radius: 4px; cursor: pointer;">Save</button>
                                          </form>
                                      </td>
                                  </tr>
                                  <?php endforeach; ?>
                              </table>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div>
                      <h3 class="text-heading-medium" style="margin-bottom: 16px;">Manage Users</h3>
                      <div style="background: #f9f9f9; padding: 24px; border-radius: 8px; overflow-x: auto;">
                          <?php if (isset($user_error)): ?><p style="color: red;"><?php echo $user_error; ?></p>
                          <?php elseif (!empty($all_users)): ?>
                              <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                                  <tr style="border-bottom: 2px solid #ccc;">
                                      <th style="padding: 8px;">User</th>
                                      <th style="padding: 8px;">Role</th>
                                      <th style="padding: 8px;">Action</th>
                                  </tr>
                                  <?php foreach ($all_users as $u): ?>
                                  <tr style="border-bottom: 1px solid #eee;">
                                      <td style="padding: 8px;"><strong><?php echo htmlspecialchars($u['username']); ?></strong></td>
                                      <td style="padding: 8px;"><?php echo htmlspecialchars($u['role']); ?></td>
                                      <td style="padding: 8px;">
                                          <?php if ($u['role'] !== 'admin'): ?>
                                              <form action="delete_user.php" method="POST" onsubmit="return confirm('Delete this user permanently?');" style="margin: 0;">
                                                  <input type="hidden" name="delete_id" value="<?php echo $u['id']; ?>">
                                                  <button type="submit" style="background: transparent; border: 1px solid red; color: red; padding: 2px 6px; border-radius: 4px; cursor: pointer; font-size: 12px;">Delete</button>
                                              </form>
                                          <?php else: ?>
                                              -
                                          <?php endif; ?>
                                      </td>
                                  </tr>
                                  <?php endforeach; ?>
                              </table>
                          <?php endif; ?>
                      </div>
                  </div>

              </div>
          </div>
      </div>
    </main>

<?php include '../includes/footer.php'; ?>