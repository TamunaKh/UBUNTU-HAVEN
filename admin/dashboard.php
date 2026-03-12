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
    $sql = "SELECT b.id, b.room_type, b.check_in, b.check_out, b.guests, b.status, u.username, u.email 
            FROM bookings b 
            JOIN users u ON b.user_id = u.id 
            ORDER BY b.check_in ASC";
    $stmt = $pdo->query($sql);
    $all_bookings = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Could not fetch bookings: " . $e->getMessage();
}
?>

      <div class="hero__content">
        <h1 class="hero__title">Resort Management</h1>
      </div>
    </header>

    <main id="main-content" class="section">
      <div class="container">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
              <h2 class="text-heading-large primary-color">All Reservations</h2>
              <a href="../auth/logout.php" class="button-outline" style="border-color: red; color: red;">Admin Logout</a>
          </div>
          
          <div id="reservations-table" style="scroll-margin-top: 120px; background: #f9f9f9; padding: 24px; border-radius: 8px; overflow-x: auto;">
              <?php if (isset($error)): ?>
                  <p style="color: red;"><?php echo $error; ?></p>
              <?php elseif (count($all_bookings) > 0): ?>
                  <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 800px;">
                      <tr style="border-bottom: 2px solid var(--primary-02);">
                          <th style="padding: 12px 8px;">Guest</th>
                          <th style="padding: 12px 8px;">Room Type</th>
                          <th style="padding: 12px 8px;">Dates</th>
                          <th style="padding: 12px 8px;">Guests</th>
                          <th style="padding: 12px 8px;">Status</th>
                          <th style="padding: 12px 8px;">Actions</th>
                      </tr>
                      
                      <?php foreach ($all_bookings as $booking): ?>
                      <tr style="border-bottom: 1px solid #ccc;">
                          <td style="padding: 12px 8px;">
                              <strong><?php echo htmlspecialchars($booking['username']); ?></strong><br>
                              <span style="font-size: 12px; color: #666;"><?php echo htmlspecialchars($booking['email']); ?></span>
                          </td>
                          <td style="padding: 12px 8px;"><?php echo htmlspecialchars($booking['room_type']); ?></td>
                          <td style="padding: 12px 8px; font-size: 14px;">
                              In: <?php echo htmlspecialchars($booking['check_in']); ?><br>
                              Out: <?php echo htmlspecialchars($booking['check_out']); ?>
                          </td>
                          <td style="padding: 12px 8px;"><?php echo htmlspecialchars($booking['guests']); ?></td>
                          
                          <td style="padding: 12px 8px; font-weight: bold; color: <?php 
                              if ($booking['status'] == 'confirmed') echo 'green'; 
                              elseif ($booking['status'] == 'cancelled') echo 'red';
                              else echo 'orange'; 
                          ?>;">
                              <?php echo ucfirst(htmlspecialchars($booking['status'])); ?>
                          </td>
                          
                          <td style="padding: 12px 8px; display: flex; gap: 8px;">
                              <?php if ($booking['status'] == 'pending'): ?>
                                  <form action="update_status.php" method="POST" style="margin: 0;">
                                      <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                                      <input type="hidden" name="new_status" value="confirmed">
                                      <button type="submit" style="background: green; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">Approve</button>
                                  </form>
                                  
                                  <form action="update_status.php" method="POST" style="margin: 0;">
                                      <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                                      <input type="hidden" name="new_status" value="cancelled">
                                      <button type="submit" style="background: red; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;" onsubmit="return confirm('Reject this booking?');">Reject</button>
                                  </form>
                              <?php else: ?>
                                  <span style="color: #999;">Resolved</span>
                              <?php endif; ?>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </table>
              <?php else: ?>
                  <p>No bookings have been made yet.</p>
              <?php endif; ?>
          </div>
      </div>
    </main>

<?php include '../includes/footer.php'; ?>