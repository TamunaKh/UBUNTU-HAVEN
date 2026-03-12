<?php 
$page_title = 'Dining | Ubuntu Haven Resort';
$hero_image = 'img/dining.webp';
include 'includes/header.php'; 
?>
        <div class="hero__content">
          <p class="hero__subtitle">TASTE OF THE REGION</p>
          <h1 class="hero__title">Farm to Table</h1>
          <div class="hero__scroll-indicator" aria-hidden="true" style="margin-top: 40px;">
              <img src="img/frame-152.png" alt="" />
          </div>
        </div>
      </header>

      <main id="main-content">
        <section class="section">
          <div class="container dining__container">
            
            <div class="dining__text-group">
                <h2 class="text-heading-large primary-color">Culinary Excellence</h2>
                <p class="text-body-large">
                  Dining at Ubuntu Haven celebrates the heart of South African cuisine. 
                  80% of our ingredients are sourced from our on-site gardens or local farmers, 
                  ensuring every bite is fresh and sustainable.
                </p>
            </div>

            <!--  RESTAURANTS  -->
            <article class="feature-row" style="margin-top:60px;">
                <img class="feature-row__img" src="img/restaurant.webp" alt="Main restaurant interior" />
                <div class="feature-row__content">
                    <h2 class="text-heading-medium primary-color">Restaurants</h2>
                    <p class="text-body-large">
                        <strong>The Ubuntu Main House:</strong> Our flagship restaurant offering 
                        fine dining with a twist. Enjoy breakfast, lunch, and dinner in a setting 
                        that blends rustic charm with modern elegance.
                    </p>
                    <a href="user_portal.php#book-services" class="button-outline">RESERVE TABLE</a>
                </div>
            </article>

            <!--  BEACH BAR  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/beach.webp" alt="Beach Bar Interior" />
                <div class="feature-row__content">
                    <h2 class="text-heading-medium primary-color">Beach Bar</h2>
                    <p class="text-body-large">
                        <strong>Sunset Lounge:</strong> Barefoot luxury at its best. Located right 
                        on the sand, enjoy signature cocktails, craft beers, and light tapas 
                        while watching the sun dip below the horizon.
                    </p>
                    <p class="text-body-large"><strong>Happy Hour:</strong> 17:00 - 19:00 Daily</p>
                </div>
            </article>

            <!--  LOCAL CUISINE  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/local cuisine.webp" alt="Regional dish" />
                <div class="feature-row__content">
                    <h2 class="text-heading-medium primary-color">Local Cuisine</h2>
                    <p class="text-body-large">
                        Experience the authentic flavors of the Western Cape. Our seasonal menus 
                        feature Cape Malay curries, fresh line fish, and traditional 'Braai' 
                        (barbecue) nights under the stars.
                    </p>
                    <a href="sample_menu.php" class="button-outline">VIEW SAMPLE MENU</a>
                </div>
            </article>

            <!--SPECIAL EVENTS  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/events.webp" alt="Celebration toast" />
                <div class="feature-row__content">
                    <h2 class="text-heading-medium primary-color">Special Events</h2>
                    <p class="text-body-large">
                        From intimate private dining in our wine cellar to grand wedding celebrations 
                        on the lawn. We curate bespoke culinary experiences for your most memorable moments.
                    </p>
                    <div class="amenities-grid" style="margin: 0; width: 100%; grid-template-columns: 1fr 1fr;">
                        <div class="amenity-item" style="padding: 16px;"><h3 class="text-body-small">Private Dining</h3></div>
                        <div class="amenity-item" style="padding: 16px;"><h3 class="text-body-small">Wine Tasting</h3></div>
                    </div>
                </div>
            </article>
            
          </div>
        </section>
      </main>

      <?php include 'includes/footer.php'; ?>
    </div>
    <script src="script.js"></script>
  </body>
</html>