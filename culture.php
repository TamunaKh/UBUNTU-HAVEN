<?php 
$page_title = 'Culture | Ubuntu Haven Resort';
$hero_image = 'img/heritage.webp';
include 'includes/header.php'; 
?>
        <div class="hero__content">
          <p class="hero__subtitle">DISCOVER</p>
          <h1 class="hero__title">Local Heritage</h1>
          <div class="hero__scroll-indicator" aria-hidden="true" style="margin-top: 40px;">
              <img src="img/frame-152.png" alt="" />
          </div>
        </div>
      </header>

      <main id="main-content">
        <section class="section">
          <div class="container">
             
            <!-- SIGHTSEEING TOURS -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/sightseeing.webp" alt="Scenic island view" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Sightseeing Tours</h2>
                    <p class="text-body-large">
                        Explore the island's breathtaking landscapes and historical landmarks. 
                        Our guided open-top jeep tours take you from the coastal cliffs to the 
                        ancient lighthouse, offering panoramic views and rich storytelling.
                    </p>
                    <a href="user_portal.php#book-services" class="button-outline">BOOK TOUR</a>
                </div>
            </article>

            <!--  TRADITIONAL MUSIC & DANCE -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/music.webp" alt="Cultural celebration" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Traditional Music & Dance</h2>
                    <p class="text-body-large">
                        Experience the rhythm of the region. Join us every Friday evening in the 
                        main courtyard for a vibrant performance of traditional folk music and 
                        dance by local artists, celebrating the island's heritage.
                    </p>
                    <p class="text-body-large"><strong>When:</strong> Fridays at 19:00</p>
                </div>
            </article>

            <!--  HISTORY MUSEUM -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/museum.webp" alt="Museum interior" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">History Museum</h2>
                    <p class="text-body-large">
                        Step back in time at the Ubuntu Heritage Museum. Located just a short 
                        walk from the resort, the museum houses artifacts, photographs, and 
                        tools that chronicle the lives of the island's first settlers.
                    </p>
                    <!-- <a href="contact.php" class="button-outline">VIEW EXHIBITS</a> -->
                </div>
            </article>

            <!--  LOCAL CRAFT MARKET -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/craft.webp" alt="Handmade local goods" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Local Craft Market</h2>
                    <p class="text-body-large">
                        Support local artisans at our weekly Craft Market. Browse a unique selection 
                        of handmade jewelry, woven textiles, pottery, and organic spices—perfect 
                        souvenirs to take a piece of the island home with you.
                    </p>
                    <p class="text-body-large"><strong>Open:</strong> Saturdays & Sundays</p>
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
