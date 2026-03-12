<?php 
$page_title = 'Spa & Wellness | Ubuntu Haven Resort';
$hero_image = 'img/image-4.webp';
include 'includes/header.php'; 
?>
        <div class="hero__content">
          <p class="hero__subtitle">RELAX & RENEW</p>
          <h1 class="hero__title">Rejuvenate Your Senses</h1>
          <div class="hero__scroll-indicator" aria-hidden="true" style="margin-top: 40px;">
              <img src="img/frame-152.png" alt="" />
          </div>
        </div>
      </header>

      <main id="main-content">
        <section class="section">
          <div class="container">
            
            <!--  MASSAGE THERAPIES  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/massage.webp" alt="Massage Therapy Room" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Massage Therapies</h2>
                    <p class="text-body-large">
                        From Deep Tissue to Hot Stone, our expert therapists use aromatic oils 
                        blended from local indigenous herbs to melt away your stress and tension.
                    </p>
                    <a href="user_portal.php#book-services" class="button-outline">BOOK TREATMENT</a>
                </div>
            </article>

            <!--  SAUNA & STEAM ROOM  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/sauna.webp" alt="Steam room with view" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Sauna & Steam Room</h2>
                    <p class="text-body-large">
                        Detoxify in our traditional Finnish sauna or relax in the eucalyptus-infused 
                        steam room. Both facilities offer floor-to-ceiling windows with calming forest views.
                    </p>
                    <div class="amenities-grid" style="margin: 0; width: 100%; grid-template-columns: 1fr 1fr;">
                        <div class="amenity-item" style="padding: 16px;"><h3 class="text-body-small">Dry Sauna</h3></div>
                        <div class="amenity-item" style="padding: 16px;"><h3 class="text-body-small">Wet Steam</h3></div>
                    </div>
                </div>
            </article>

            <!--  YOGA & MEDITATION CLASSES  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/gallery-4.webp" alt="Outdoor Yoga Deck" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Yoga & Meditation</h2>
                    <p class="text-body-large">
                        Reconnect with your inner self. Join our sunrise yoga sessions on the deck 
                        or find your center in our guided meditation classes held in the forest sanctuary.
                    </p>
                    <p class="text-body-large"><strong>Schedule:</strong> Daily at 07:00 and 17:00</p>
                    <!-- <a href="contact.php" class="button-outline">VIEW SCHEDULE</a> -->
                </div>
            </article>

            <!-- FITNESS CENTER  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/fitness.webp" alt="Fitness center equipment" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Fitness Center</h2>
                    <p class="text-body-large">
                        Stay active during your stay with our state-of-the-art gym, featuring 
                        cardio machines, free weights, and personal training sessions upon request.
                    </p>
                    <p class="text-body-large"><strong>Open:</strong> 24 Hours for Guests</p>
                </div>
            </article>

            <!--  WELLNESS PACKAGES -->
            <div style="margin-top: 90px; width: 100%;">
                <h2 class="text-heading-medium primary-color centered">Wellness Packages</h2>
                <table class="price-table">
                    <caption>Choose a package to enhance your stay. Prices in ZAR.</caption>
                    <thead>
                        <tr>
                            <th scope="col">Package Name</th>
                            <th scope="col">Includes</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Rejuvenator</td>
                            <td>Full Body Massage + Facial</td>
                            <td>120 Min</td>
                            <td class="price-tag">R 1,800</td>
                        </tr>
                        <tr>
                            <td>Couples Retreat</td>
                            <td>Dual Massage + Private Jacuzzi</td>
                            <td>90 Min</td>
                            <td class="price-tag">R 2,500</td>
                        </tr>
                        <tr>
                            <td>Detox Day</td>
                            <td>Yoga + Sauna + Green Juice Lunch</td>
                            <td>4 Hours</td>
                            <td class="price-tag">R 1,200</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
          </div>
        </section>
      </main>
    <?php include 'includes/footer.php'; ?>

    </div>
    <script src="script.js"></script>
  </body>
</html>
