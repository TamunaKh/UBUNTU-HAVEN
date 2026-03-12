<?php 
$page_title = 'Contact | Ubuntu Haven Resort';
$hero_image = 'img/contact.webp';
include 'includes/header.php'; 
?>
        <div class="hero__content">
          <h1 class="hero__title">Get in Touch</h1>
          <div class="hero__scroll-indicator" aria-hidden="true" style="margin-top: 40px;">
              <img src="img/frame-152.png" alt="" />
          </div>
        </div>
      </header>

      <main id="main-content">
        
        <!-- BLOG & NEWS -->
        <section class="section">
            <div class="container">
                <div style="margin-bottom: 40px; text-align: center;">
                    <h2 class="text-heading-large primary-color">Blog & News</h2>
                </div>
                <div class="overview__text-row">
                    <!-- News Item 1 -->
                    <article style="flex: 1; display: flex; flex-direction: column; gap: 16px;">
                        <img src="img/resort.webp" alt="Resort Overview" style="width: 100%; height: 300px; object-fit: cover; border-radius: 4px;" />
                        <h3 class="text-heading-medium">Best Resort Award 2025</h3>
                        <p class="text-body-large">We are honored to be named the top eco-resort in the Western Cape for the second year running.</p>
                        <a href="#" class="button-outline" style="align-self: flex-start;">READ MORE</a>
                    </article>
                    <!-- News Item 2 -->
                    <article style="flex: 1; display: flex; flex-direction: column; gap: 16px;">
                         <img src="img/food.webp" alt="New seasonal pancake" style="width: 100%; height: 300px; object-fit: cover; border-radius: 4px;" />
                        <h3 class="text-heading-medium">New Seasonal Menu</h3>
                        <p class="text-body-large">Our head chef introduces a new farm-to-table menu celebrating the harvest of the season.</p>
                        <a href="#" class="button-outline" style="align-self: flex-start;">READ MORE</a>
                    </article>
                </div>
            </div>
        </section>

        <!--  CONTACT FORM  -->
       <section class="booking" id="booking">
          <div class="booking__wrapper">
            <img class="booking__bg-image" src="/UBUNTU-HAVEN/img/bg.webp" alt="" aria-hidden="true" loading="lazy" />
            
            <div class="booking__content">
              <h2 class="text-heading-large white-color centered">Plan Your Getaway Today</h2>
              
              <form action="process_booking.php" method="POST" style="display: flex; flex-wrap: wrap; background: #1a1a1a; border-radius: 4px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5); width: 100%; align-items: stretch;">
    
                <div style="flex: 1.5; min-width: 200px; padding: 16px 24px; border-right: 1px solid #333;">
                    <label style="display: block; font-size: 11px; color: #999; margin-bottom: 8px; letter-spacing: 1px; text-transform: uppercase;">Room Type</label>
                    <select name="room_type" required style="width: 100%; background: transparent; color: white; border: none; outline: none; font-size: 16px; font-family: var(--font-family-body); cursor: pointer; appearance: auto;">
                        <option value="" disabled selected style="color: #999;">Select a room...</option>
                        <option value="Standard Room" style="color: black;">Standard Room</option>
                        <option value="Deluxe Room" style="color: black;">Deluxe Room</option>
                        <option value="Ocean View Suite" style="color: black;">Ocean View Suite</option>
                        <option value="Garden Villa" style="color: black;">Garden Villa</option>
                        <option value="Luxury Villa" style="color: black;">Luxury Villa</option>
                        <option value="Presidential Suite" style="color: black;">Presidential Suite</option>
                    </select>
                </div>

                <div style="flex: 1; min-width: 150px; padding: 16px 24px; border-right: 1px solid #333;">
                    <label style="display: block; font-size: 11px; color: #999; margin-bottom: 8px; letter-spacing: 1px; text-transform: uppercase;">Check-In</label>
                    <input type="date" name="check_in" min="<?php echo date('Y-m-d'); ?>" required style="width: 100%; background: transparent; color: white; border: none; outline: none; font-size: 16px; font-family: var(--font-family-body); color-scheme: dark;">
                </div>

                <div style="flex: 1; min-width: 150px; padding: 16px 24px; border-right: 1px solid #333;">
                    <label style="display: block; font-size: 11px; color: #999; margin-bottom: 8px; letter-spacing: 1px; text-transform: uppercase;">Check-Out</label>
                    <input type="date" name="check_out" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required style="width: 100%; background: transparent; color: white; border: none; outline: none; font-size: 16px; font-family: var(--font-family-body); color-scheme: dark;">
                </div>

                <div style="flex: 1; min-width: 120px; padding: 16px 24px;">
                    <label style="display: block; font-size: 11px; color: #999; margin-bottom: 8px; letter-spacing: 1px; text-transform: uppercase;">Guests</label>
                    <input type="number" name="guests" min="1" max="10" placeholder="1" required style="width: 100%; background: transparent; color: white; border: none; outline: none; font-size: 16px; font-family: var(--font-family-body);">
                </div>

                <div style="flex: 1.2; min-width: 200px; display: flex;">
                    <button type="submit" style="width: 100%; height: 100%; padding: 16px; background-color: var(--primary-01); color: white; border: none; font-size: 14px; font-weight: bold; letter-spacing: 1px; text-transform: uppercase; cursor: pointer; transition: opacity 0.3s; font-family: var(--font-family-heading);">Book Your Stay</button>
                </div>
                
              </form>
            </div>
          </div>
        </section>

        <!-- 3. CUSTOMER SUPPORT (Card Sort Item 3) -->
        <section class="section h-card">
            <div class="container centered">
                <h2 class="text-heading-large primary-color">Customer Support</h2>
                <div style="margin-top:40px; display:flex; flex-direction:column; gap:20px;">
                    <p class="text-body-large">
                        Our dedicated concierge team is available 24/7 to assist with your booking, 
                        transportation, and any special requirements you may have.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 16px; margin-top: 24px; align-items: center;">
                        <p class="text-body-large p-name"><strong>Ubuntu Haven Resort</strong></p>
                        <p class="text-body-large p-adr">
                            <span class="p-street-address">Sunset Bay</span>, <span class="p-locality">Western Cape</span>, <span class="p-country-name">South Africa</span>
                        </p>
                        <p class="text-body-large">
                            <strong>Tel:</strong> <a href="tel:+27211452525" class="p-tel">+27 211 452 525</a>
                        </p>
                        <p class="text-body-large">
                            <strong>Email:</strong> <a href="mailto:resort@ubuntuhaven.com" class="u-email">resort@ubuntuhaven.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. GUEST REVIEWS (Card Sort Item 4 - hReview Microformat) -->
        <section class="section" style="background-color: var(--gray-50);">
            <div class="container centered">
                <h2 class="text-heading-large primary-color">Guest Reviews</h2>
                <div class="overview__text-row" style="margin-top: 60px;">
                    
                    <!-- Review 1 -->
                    <div class="h-review" style="background: white; padding: 32px; border-radius: 8px; flex: 1; text-align: left;">
                        <h3 class="p-item h-item p-name" style="display:none;">Ubuntu Haven Resort</h3>
                        <div class="p-rating" style="color: var(--primary-02); margin-bottom: 16px;">★★★★★</div>
                        <p class="p-description text-body-large">
                            "An absolute paradise. The villas are stunning and the staff treated us like family. 
                            The hiking tour was the highlight of our trip!"
                        </p>
                        <p class="p-author h-card text-body-small" style="margin-top: 24px; font-weight: bold;">
                            - <span class="p-name">Sarah Jenkins</span>, <span class="dt-reviewed">Oct 2024</span>
                        </p>
                    </div>

                    <!-- Review 2 -->
                    <div class="h-review" style="background: white; padding: 32px; border-radius: 8px; flex: 1; text-align: left;">
                        <h3 class="p-item h-item p-name" style="display:none;">Ubuntu Haven Resort</h3>
                        <div class="p-rating" style="color: var(--primary-02); margin-bottom: 16px;">★★★★★</div>
                        <p class="p-description text-body-large">
                            "The farm-to-table dining experience is world-class. I've never tasted fresher seafood. 
                            Highly recommend the Sunset Beach Bar."
                        </p>
                        <p class="p-author h-card text-body-small" style="margin-top: 24px; font-weight: bold;">
                            - <span class="p-name">David O'Connor</span>, <span class="dt-reviewed">Nov 2024</span>
                        </p>
                    </div>

                </div>
            </div>
        </section>
        

      </main>

      <?php include 'includes/footer.php'; ?>
    </div>
    <script src="script.js"></script>
  </body>
</html>
