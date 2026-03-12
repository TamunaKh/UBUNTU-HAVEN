<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

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

try {
    $gallery_stmt = $pdo->prepare("SELECT image_path FROM gallery WHERE user_id = ? ORDER BY uploaded_at DESC");
    $gallery_stmt->execute([$user_id]);
    $photos = $gallery_stmt->fetchAll();
} catch (PDOException $e) {
    $gallery_error = "Could not fetch photos: " . $e->getMessage();
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
                        <h3 class="text-heading-medium" style="margin-bottom: 16px;">Leave a Review</h3>
                        <p style="margin-bottom: 16px;">Tell us about your stay!</p>
                        
                        <form action="process_review.php" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
                            <select name="rating" required style="padding: 12px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                                <option value="5">★★★★★ - Excellent</option>
                                <option value="4">★★★★☆ - Very Good</option>
                                <option value="3">★★★☆☆ - Average</option>
                                <option value="2">★★☆☆☆ - Poor</option>
                                <option value="1">★☆☆☆☆ - Terrible</option>
                            </select>
                            
                            <textarea name="comment" rows="3" placeholder="Write your review here..." required style="padding: 12px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body); resize: vertical;"></textarea>
                            
                            <button type="submit" class="button-outline" style="background-color: var(--primary-01); color: white; justify-content: center; width: fit-content;">Submit Review</button>
                        </form>

                        <?php if(isset($_GET['review']) && $_GET['review'] == 'success'): ?>
                            <p style="color: green; margin-top: 12px; font-weight: bold;">Thank you for your feedback!</p>
                        <?php endif; ?>
                    </div>
                    
                    <div style="background: #f9f9f9; padding: 24px; border-radius: 8px;">
                        <h3 class="text-heading-medium" style="margin-bottom: 16px;">Resort Gallery</h3>
                        <p style="margin-bottom: 16px;">Share your favorite resort memories.</p>
                        
                        <form action="upload_photo.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 12px;">
                            <input type="file" name="resort_photo" accept="image/*" required style="font-family: var(--font-family-body);">
                            <button type="submit" class="button-outline" style="background-color: var(--primary-01); color: white; justify-content: center; width: fit-content;">Upload Photo</button>
                        </form>

                        <?php if(isset($_GET['upload'])): ?>
                            <?php if($_GET['upload'] == 'success'): ?>
                                <p style="color: green; margin-top: 12px; font-weight: bold;">Photo uploaded successfully!</p>
                            <?php elseif($_GET['upload'] == 'error'): ?>
                                <p style="color: red; margin-top: 12px; font-weight: bold;">File too large! Please choose an image under 2MB.</p>
                            <?php elseif($_GET['upload'] == 'invalid_format'): ?>
                                <p style="color: red; margin-top: 12px; font-weight: bold;">Invalid file! Please upload a JPG, PNG, or WEBP.</p>
                            <?php elseif($_GET['upload'] == 'move_failed'): ?>
                                <p style="color: red; margin-top: 12px; font-weight: bold;">Server error: Could not save the file.</p>
                            <?php endif; ?>
                        <?php endif; ?>

                        <div style="margin-top: 24px; display: grid; grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); gap: 12px;">
                            <?php if (isset($gallery_error)): ?>
                                <p style="color: red;"><?php echo $gallery_error; ?></p>
                            <?php elseif (!empty($photos)): ?>
                                <?php foreach ($photos as $photo): ?>
                                    <img src="/UBUNTU-HAVEN/<?php echo htmlspecialchars($photo['image_path']); ?>" alt="User uploaded resort photo" style="width: 100%; height: 100px; object-fit: cover; border-radius: 4px; border: 1px solid #ccc;">
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p style="color: #666; font-size: 14px;">No photos uploaded yet.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </main>

<?php include 'includes/footer.php'; ?>
