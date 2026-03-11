<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}


require_once 'db_config.php';


$page_title = 'My Portal | Ubuntu Haven';
$hero_image = 'img/image.webp'; 
include 'includes/header.php'; 

$user_id = $_SESSION['user_id'];
try {
    $stmt = $pdo->prepare("SELECT * FROM bookings WHERE user_id = ? ORDER BY check_in DESC");
    $stmt->execute([$user_id]);
    $bookings = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Could not fetch bookings: " . $e->getMessage();
}
?>

        <div class="hero__content">
          <h1 class="hero__title">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        </div>
      </header>

      <main id="main-content" class="section">
        <div class="container">
            <h2 class="text-heading-large primary-color" style="margin-bottom: 24px;">My Dashboard</h2>
            
            <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                
                <div style="flex: 2; min-width: 300px; background: #f9f9f9; padding: 24px; border-radius: 8px;">
                    <h3 class="text-heading-medium" style="margin-bottom: 16px;">My Bookings</h3>
                    
                    <?php if (isset($error)): ?>
                        <p style="color: red;"><?php echo $error; ?></p>
                    <?php elseif (count($bookings) > 0): ?>
                        <table style="width: 100%; border-collapse: collapse; text-align: left;">
                            <tr style="border-bottom: 2px solid var(--primary-02);">
                                <th style="padding: 12px 8px;">Room Type</th>
                                <th style="padding: 12px 8px;">Check-In</th>
                                <th style="padding: 12px 8px;">Check-Out</th>
                                <th style="padding: 12px 8px;">Status</th>
                                <th style="padding: 12px 8px;">Action</th> </tr>
                            <?php foreach ($bookings as $booking): ?>
                            <tr style="border-bottom: 1px solid #ccc;">
                                <td style="padding: 12px 8px;"><?php echo htmlspecialchars($booking['room_type']); ?></td>
                                <td style="padding: 12px 8px;"><?php echo htmlspecialchars($booking['check_in']); ?></td>
                                <td style="padding: 12px 8px;"><?php echo htmlspecialchars($booking['check_out']); ?></td>
                                
                                <td style="padding: 12px 8px; font-weight: bold; color: <?php 
                                    if ($booking['status'] == 'confirmed') echo 'green'; 
                                    elseif ($booking['status'] == 'cancelled') echo 'red';
                                    else echo 'orange'; 
                                ?>;">
                                    <?php echo ucfirst(htmlspecialchars($booking['status'])); ?>
                                </td>
                                
                                <td style="padding: 12px 8px;">
                                    <?php if ($booking['status'] == 'pending'): ?>
                                        <form action="cancel_booking.php" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');" style="margin: 0;">
                                            <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                                            <button type="submit" style="background: transparent; border: 1px solid red; color: red; padding: 4px 8px; border-radius: 4px; cursor: pointer;">Cancel</button>
                                        </form>
                                    <?php else: ?>
                                        <span style="color: #999;">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php else: ?>
                        <p>You have no upcoming stays. <a href="accommodation.php" style="color: var(--primary-02);">Book a room today!</a></p>
                    <?php endif; ?>
                </div>

                <div style="flex: 1; min-width: 250px; display: flex; flex-direction: column; gap: 24px;">
                    <div style="background: #f9f9f9; padding: 24px; border-radius: 8px;">
                        <h3 class="text-heading-medium" style="margin-bottom: 16px;">Profile Details</h3>
                        <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                        <p><strong>Account Type:</strong> <?php echo ucfirst(htmlspecialchars($_SESSION['role'])); ?></p>
                        <br>
                        <a href="auth/logout.php" class="button-outline" style="border-color: red; color: red; display: inline-block;">Log Out</a>
                    </div>
                    
                    <div style="background: #f9f9f9; padding: 24px; border-radius: 8px;">
                        <h3 class="text-heading-medium" style="margin-bottom: 16px;">Resort Gallery</h3>
                        <p style="margin-bottom: 16px;">Share your favorite resort memories.</p>
                        <a href="#" class="button-outline" style="background-color: var(--primary-01); color: white; display: inline-block;">Upload Photo</a>
                    </div>
                </div>

            </div>
        </div>
      </main>

<?php include 'includes/footer.php'; ?>