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
                    <a href="contact.php" class="button-outline">RESERVE TABLE</a>
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
                    <a href="contact.php" class="button-outline">VIEW SAMPLE MENU</a>
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

      <!-- FOOTER  -->
      <footer class="footer" id="contact">
          <div class="container">
              <div class="footer__logo-area">
                  <img class="footer__logo" src="img/company-logo-1.svg" alt="Ubuntu Haven Logo" loading="lazy"/>
              </div>
              <div class="footer__top-row">
                  <div class="footer__nav-wrapper">
                      <nav class="footer__col" aria-label="Footer Navigation">
                          <h3 class="footer__heading">MENU</h3>
                          <ul class="footer__list" role="list">
                              <li class="footer__item"><a href="accommodation.php"
                                                          class="footer__link-large">Stay</a></li>
                              <li class="footer__item"><a href="dining.php" class="footer__link-large">Dining</a>
                              </li>
                              <li class="footer__item"><a href="Spa.php" class="footer__link-large">Relax</a></li>
                              <li class="footer__item"><a href="Recreation.php"
                                                          class="footer__link-large">Discover</a></li>
                          </ul>
                      </nav>
                      <div class="footer__col-contact h-card">
                          <h3 class="footer__heading">CONTACT</h3>
                          <div class="footer__address-block">
                              <p class="p-name sr-only">Ubuntu Haven Resort</p>
                              <div class="p-adr h-geo">
                                  <p class="text-body-large p-street-address">Ubuntu Haven, Sunset Bay</p>
                                  <p class="text-body-large">
                                      <span class="p-locality">Western Cape</span>,
                                      <span class="p-country-name">South Africa</span>
                                  </p>
                                  <data class="p-latitude" value="-33.9249"></data>
                                  <data class="p-longitude" value="18.4241"></data>
                              </div>
                              <a href="tel:+27211452525" class="text-body-large p-tel"
                                style="display:block; margin-top:16px;">+27 211 452 525</a>
                              <a href="mailto:resort@ubuntuhaven.com" class="text-body-large u-email">resort@ubuntuhaven.com</a>
                              <a class="u-url" href="https://tamunakh.github.io/UBUNTU-HAVEN/" style="display:none;">Website</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer__bottom-row">
                  <div class="footer__copyright"><p class="footer__text-small">© 2025 Ubuntu Haven. All rights
                      reserved</p></div>
                  <div class="footer__bottom-links">
                      <nav class="footer__social" aria-label="Social Media">
                          <a href="https://instagram.com" class="footer__text-small">Instagram</a>
                          <br/>
                          <a href="https://facebook.com" class="footer__text-small">Facebook</a>
                      </nav>
                      <nav class="footer__legal" aria-label="Legal">
                          <a href="/terms" class="footer__text-small">Terms</a>
                          <a href="/privacy" class="footer__text-small">Privacy</a>
                      </nav>
                  </div>
              </div>
          </div>
      </footer>
    </div>
    <script src="script.js"></script>
  </body>
</html>