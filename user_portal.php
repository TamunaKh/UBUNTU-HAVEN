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
try {
    $stmt = $pdo->prepare("SELECT * FROM service_bookings WHERE user_id = ? ORDER BY booking_date ASC, booking_time ASC");
    $stmt->execute([$user_id]);
    $service_bookings = $stmt->fetchAll();
} catch (PDOException $e) {
    $service_error = "Could not fetch your activity bookings.";
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
                <div style="flex: 100%; background: #f9f9f9; padding: 24px; border-radius: 8px; margin-bottom: 24px; width: 100%;">
                    <h3 class="text-heading-medium" style="margin-bottom: 16px;">Book a New Stay</h3>
                    
                    <form action="process_booking.php" method="POST" style="display: flex; flex-wrap: wrap; gap: 16px; align-items: flex-end;">
                        
                        <div style="display: flex; flex-direction: column; flex: 2; min-width: 150px;">
                            <label for="room_type" style="margin-bottom: 8px; font-weight: bold; font-size: 14px;">Room Type</label>
                            <select name="room_type" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                                <option value="" disabled selected>Select a room...</option>
                                <option value="Standard Room">Standard Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Ocean View Suite">Ocean View Suite</option>
                                <option value="Garden Villa">Garden Villa</option>
                                <option value="Luxury Villa">Luxury Villa</option>
                                <option value="Presidential Suite">Presidential Suite</option>
                            </select>
                        </div>

                        <div style="display: flex; flex-direction: column; flex: 1; min-width: 130px;">
                            <label for="check_in" style="margin-bottom: 8px; font-weight: bold; font-size: 14px;">Check-In</label>
                            <input type="date" name="check_in" min="<?php echo date('Y-m-d'); ?>" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                        </div>

                        <div style="display: flex; flex-direction: column; flex: 1; min-width: 130px;">
                            <label for="check_out" style="margin-bottom: 8px; font-weight: bold; font-size: 14px;">Check-Out</label>
                            <input type="date" name="check_out" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                        </div>

                        <div style="display: flex; flex-direction: column; flex: 1; min-width: 80px;">
                            <label for="guests" style="margin-bottom: 8px; font-weight: bold; font-size: 14px;">Guests</label>
                            <input type="number" name="guests" min="1" max="10" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                        </div>

                        <div style="flex: 1; min-width: 150px;">
                            <button type="submit" class="button-outline" style="background-color: var(--primary-01); color: white; width: 100%; justify-content: center; padding: 11px;">Book Now</button>
                        </div>
                    </form>

                    <?php if(isset($_GET['booking']) && $_GET['booking'] == 'success'): ?>
                        <p style="color: green; margin-top: 16px; font-weight: bold;">Booking requested successfully! Awaiting admin approval.</p>
                    <?php endif; ?>
                </div>
                <div id="book-services" style="scroll-margin-top: 120px; flex: 100%; margin-bottom: 30px; width: 100%;">
                    <h3 class="text-heading-medium" style="margin-bottom: 16px;">Book Resort Services</h3>
                    
                    <?php if(isset($_GET['service']) && $_GET['service'] == 'success'): ?>
                        <div style="background: #2e7d32; color: white; padding: 12px; border-radius: 4px; margin-bottom: 16px; font-weight: bold;">Service requested successfully! Awaiting admin approval.</div>
                    <?php endif; ?>

                    <div style="display: flex; flex-wrap: wrap; gap: 24px;">
                        
                        <div style="flex: 1; min-width: 280px; background: #262626; padding: 24px; border-radius: 8px; border-top: 4px solid #F4D03F;">
                            <h4 style="color: white; margin-bottom: 16px; font-size: 18px;">Spa & Wellness</h4>
                            <form action="process_service.php" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
                                <input type="hidden" name="service_type" value="Spa">
                                <select name="specific_service" required style="padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px;">
                                    <option value="" disabled selected>Select Therapy...</option>
                                    <option value="Swedish Massage">Swedish Massage</option>
                                    <option value="Deep Tissue Massage">Deep Tissue Massage</option>
                                    <option value="Hot Stone Therapy">Hot Stone Therapy</option>
                                </select>
                                <div style="display: flex; gap: 10px;">
                                    <input type="date" name="booking_date" min="<?php echo date('Y-m-d'); ?>" required style="flex: 1; padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; color-scheme: dark;">
                                    <input type="time" name="booking_time" required style="flex: 1; padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; color-scheme: dark;">
                                </div>
                                <input type="number" name="guests" min="1" max="2" placeholder="Guests (1-2)" required style="padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px;">
                                <button type="submit" style="background: var(--primary-01); color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Book Spa</button>
                            </form>
                        </div>

                        <div style="flex: 1; min-width: 280px; background: #262626; padding: 24px; border-radius: 8px; border-top: 4px solid #F4D03F;">
                            <h4 style="color: white; margin-bottom: 16px; font-size: 18px;">Tours & Recreation</h4>
                            <form action="process_service.php" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
                                <input type="hidden" name="service_type" value="Tour">
                                <select name="specific_service" required style="padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px;">
                                    <option value="" disabled selected>Select Activity...</option>
                                    <option value="Guided Mountain Hike">Guided Mountain Hike</option>
                                    <option value="Sunset Boat Trip">Sunset Boat Trip</option>
                                    <option value="City Sightseeing Tour">City Sightseeing Tour</option>
                                </select>
                                <div style="display: flex; gap: 10px;">
                                    <input type="date" name="booking_date" min="<?php echo date('Y-m-d'); ?>" required style="flex: 1; padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; color-scheme: dark;">
                                    <input type="time" name="booking_time" required style="flex: 1; padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; color-scheme: dark;">
                                </div>
                                <input type="number" name="guests" min="1" max="10" placeholder="Number of Guests" required style="padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px;">
                                <button type="submit" style="background: var(--primary-01); color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Book Activity</button>
                            </form>
                        </div>

                        <div style="flex: 1; min-width: 280px; background: #262626; padding: 24px; border-radius: 8px; border-top: 4px solid #F4D03F;">
                            <h4 style="color: white; margin-bottom: 16px; font-size: 18px;">Dining Reservation</h4>
                            <form action="process_service.php" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
                                <input type="hidden" name="service_type" value="Dining">
                                <input type="hidden" name="specific_service" value="Table Reservation">
                                <div style="padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; text-align: center; color: #aaa;">Main Restaurant</div>
                                <div style="display: flex; gap: 10px;">
                                    <input type="date" name="booking_date" min="<?php echo date('Y-m-d'); ?>" required style="flex: 1; padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; color-scheme: dark;">
                                    <input type="time" name="booking_time" min="17:00" max="22:00" required style="flex: 1; padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px; color-scheme: dark;">
                                </div>
                                <input type="number" name="guests" min="1" max="12" placeholder="Table for how many?" required style="padding: 10px; background: #333; color: white; border: 1px solid #4a4a4a; border-radius: 4px;">
                                <button type="submit" style="background: var(--primary-01); color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Reserve Table</button>
                            </form>
                        </div>

                 </div>
</div>
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
                    <h4 style="margin-top: 40px; margin-bottom: 16px; font-size: 18px; color: #333; border-bottom: 2px solid var(--primary-02); padding-bottom: 8px;">My Activities & Dining</h4>
            
            <?php if (isset($service_error)): ?>
                <p style="color: red;"><?php echo $service_error; ?></p>
            <?php elseif (!empty($service_bookings)): ?>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                        <tr style="border-bottom: 2px solid #ddd;">
                            <th style="padding: 12px 8px; color: #666; text-transform: uppercase; font-size: 12px;">Type</th>
                            <th style="padding: 12px 8px; color: #666; text-transform: uppercase; font-size: 12px;">Detail</th>
                            <th style="padding: 12px 8px; color: #666; text-transform: uppercase; font-size: 12px;">Date & Time</th>
                            <th style="padding: 12px 8px; color: #666; text-transform: uppercase; font-size: 12px;">Guests</th>
                            <th style="padding: 12px 8px; color: #666; text-transform: uppercase; font-size: 12px;">Status</th>
                            <th style="padding: 12px 8px; color: #666; text-transform: uppercase; font-size: 12px;">Action</th>
                        </tr>
                        <?php foreach ($service_bookings as $srv): ?>
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 12px 8px;"><strong><?php echo htmlspecialchars($srv['service_type']); ?></strong></td>
                            <td style="padding: 12px 8px;"><?php echo htmlspecialchars($srv['specific_service']); ?></td>
                            <td style="padding: 12px 8px;">
                                <?php echo date('M d, Y', strtotime($srv['booking_date'])); ?> <br>
                                <span style="color: #888; font-size: 12px;"><?php echo date('h:i A', strtotime($srv['booking_time'])); ?></span>
                            </td>
                            <td style="padding: 12px 8px; text-align: center;"><?php echo htmlspecialchars($srv['guests']); ?></td>
                            <td style="padding: 12px 8px; font-weight: bold; color: <?php echo ($srv['status'] == 'confirmed') ? 'green' : (($srv['status'] == 'cancelled') ? 'red' : 'orange'); ?>;">
                                <?php echo ucfirst(htmlspecialchars($srv['status'])); ?>
                            </td>
                            <td style="padding: 12px 8px;">
                                <?php if ($srv['status'] == 'pending'): ?>
                                    <form action="cancel_service.php" method="POST" onsubmit="return confirm('Cancel this booking?');" style="margin: 0;">
                                        <input type="hidden" name="service_id" value="<?php echo $srv['id']; ?>">
                                        <button type="submit" style="background: transparent; border: 1px solid red; color: red; padding: 4px 8px; border-radius: 4px; cursor: pointer; font-size: 12px;">Cancel</button>
                                    </form>
                                <?php else: ?>
                                    <span style="color: #ccc;">-</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php else: ?>
                <p style="color: #666; font-size: 14px; font-style: italic;">You haven't booked any spa treatments, dining, or tours yet.</p>
            <?php endif; ?>
                </div>

                <div style="flex: 1; min-width: 250px; display: flex; flex-direction: column; gap: 24px;">
                    <div id="bookings-section" style="background: #f9f9f9; padding: 24px; border-radius: 8px;">
                        <h3 class="text-heading-medium" style="margin-bottom: 16px;">Profile Details</h3>
                        <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                        <p><strong>Account Type:</strong> <?php echo ucfirst(htmlspecialchars($_SESSION['role'])); ?></p>
                        <br>
                        <a href="auth/logout.php" class="button-outline" style="border-color: red; color: red; display: inline-block;">Log Out</a>
                    </div>

                    <div id="reviews-section" style="background: #f9f9f9; padding: 24px; border-radius: 8px;">
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
                    
                    <div id="gallery-section" style="background: #f9f9f9; padding: 24px; border-radius: 8px;">
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
<script src="/UBUNTU-HAVEN/script.js"></script>
