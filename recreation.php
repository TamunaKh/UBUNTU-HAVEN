<?php 
$page_title = 'Recreation | Ubuntu Haven Resort';
$hero_image = 'img/adventure.webp';
include 'includes/header.php'; 
?>
        <div class="hero__content">
          <p class="hero__subtitle">UBUNTU HAVEN RESORT</p>
          <h1 class="hero__title">Adventure Awaits</h1>
          <div class="hero__scroll-indicator" aria-hidden="true" style="margin-top: 40px;">
              <img src="img/frame-152.png" alt="" />
          </div>
        </div>
      </header>

      <main id="main-content">
        <section class="section">
          <div class="container">
            
            <!--  HIKING TOURS  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/hiking.webp" alt="Group trekking in green forest" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Hiking Tours</h2>
                    <p class="text-body-large">
                        Discover the island's hidden gems on foot. Our guided Nature Serenity Trek 
                        takes you through lush rainforest trails, leading to panoramic viewpoints 
                        that overlook the entire bay.
                    </p>
                    <p class="text-body-large"><strong>Duration:</strong> 3 Hours (Morning/Afternoon)</p>
                    <a href="user_portal.php#book-services" class="button-outline">BOOK HIKE</a>
                </div>
            </article>

            <!--  DIVING & SNORKELING  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/diving.webp" alt="Diver swimming near coral reef" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Diving & Snorkeling</h2>
                    <p class="text-body-large">
                        Bataxhana Island features seven premier dive sites showcasing spectacular 
                        coral reefs and a rich marine ecosystem. Equipment and PADI certified 
                        instructors are available for all skill levels.
                    </p>
                    <a href="contact.php" class="button-outline">VIEW DIVE SPOTS</a>
                </div>
            </article>

            <!-- BOAT TRIPS  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/boat.webp" alt="Dolphins jumping at sunrise" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Boat Trips</h2>
                    <p class="text-body-large">
                        Set sail on the open ocean. Choose between our romantic sunset cruises 
                        complete with champagne, or our morning Dolphin Watching excursions to 
                        see the pods play in Davina Bay.
                    </p>
                    <a href="user_portal.php#book-services" class="button-outline">CHECK SCHEDULE</a>
                </div>
            </article>

            <!--  CULTURAL WORKSHOPS  -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/culture.webp" alt="Local village crafting" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Cultural Workshops</h2>
                    <p class="text-body-large">
                        Immerse yourself in local traditions. Participate in pottery making, 
                        traditional weaving classes, or learn to cook regional dishes with 
                        our local chefs using fresh ingredients.
                    </p>
                    <div class="amenities-grid" style="margin: 0; width: 100%; grid-template-columns: 1fr 1fr;">
                        <div class="amenity-item" style="padding: 16px;"><h3 class="text-body-small">Pottery</h3></div>
                        <div class="amenity-item" style="padding: 16px;"><h3 class="text-body-small">Cooking</h3></div>
                    </div>
                </div>
            </article>

            <!--  KID'S ZONE -->
            <article class="feature-row">
                <img class="feature-row__img" src="img/kids.webp" alt="Kids playing in safe pool area" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color">Kid's Zone</h2>
                    <p class="text-body-large">
                        A safe and fun environment for our younger guests. The Kid's Zone offers 
                        supervised activities including treasure hunts, arts & crafts, and a 
                        shallow splash pool, giving parents time to relax.
                    </p>
                    <p class="text-body-large"><strong>Ages:</strong> 4 - 12 Years</p>
                    <a href="contact.php" class="button-outline">LEARN MORE</a>
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
