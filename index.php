<?php 
$page_title = 'Ubuntu Haven Resort | Student Project';
$hero_image = 'img/image.webp';
include 'includes/header.php'; 
?>

        <div class="hero__content">
          <div class="hero__text-group">
            <p class="hero__subtitle">UBUNTU HAVEN RESORT</p>
            <h1 class="hero__title">Find Peace in South Africa's Natural Beauty</h1>
          </div>
          
          <div class="hero__scroll-indicator" aria-hidden="true">
              <img src="img/frame-152.png" alt="" />
          </div>
        </div>

        <a href="contact.php" class="hero__cta-circle" aria-label="Book your stay now">
           <img class="hero__cta-icon" src="img/frame-1.png" alt="" aria-hidden="true" />
        </a>
      </header>

      <main id="main-content">
        
        <section class="section" style="padding: 40px 0; background: #fff; border-bottom: 1px solid var(--gray-200);">
            <div class="container centered">
                <h2 class="text-body-large" style="margin-bottom: 16px; font-weight: bold; color: var(--primary-01);">Project Authors</h2>
                <p class="text-body-large">
                    Created by: <strong>Tamuna Kheladze, Safiyya Kassim, Jokanola Monsurah</strong>
                </p>
            </div>
        </section>

        <!-- OVERVIEW SECTION -->
        <section class="section overview" id="overview">
          <div class="container overview__container">
            <div class="overview__text-row">
              <div class="overview__heading-col">
                <h2 class="text-heading-large primary-color">
                  Designed for slow mornings, scenic views, and unforgettable outdoor adventures.
                </h2>
              </div>
              <div class="overview__desc-col">
                <p class="text-body-large">
                   With all the luxuries that matter, and none that don&#39;t. Our villas are surrounded by gardens and
                  decorated in a personal style, that makes you feel like staying in the home of a friend.
                </p>
                <a href="accommodation.php" class="button-outline">
                  <span class="button-text">EXPLORE OUR VILLAS</span>
                  <img class="icon-arrow" src="img/arrow-up-right.svg" alt="" aria-hidden="true" />
                </a>
              </div>
            </div>
            <div class="overview__image-grid">
               <img class="overview__img img-offset" src="img/code.webp" alt="Luxury villa with pool" loading="lazy" /> 
               <img class="overview__img" src="img/code1.webp" alt="Cozy villa interior bedroom" loading="lazy" /> 
            </div>
          </div>
        </section>

        <!-- OUR ROOMS SECTION  -->
            <section class="section rooms-carousel" id="rooms">
                <div class="container">
                    <div class="rooms-header">
                        <h2 class="text-heading-large primary-color">Our Rooms</h2>
                        <div class="rooms-nav">
                            <button class="nav-btn" aria-label="Previous room">
                                <img class="icon-arrow" style="transform: rotate(180deg);" src="img/arrow-up-right.svg" alt="&larr;" />
                            </button>
                            <button class="nav-btn" aria-label="Next room">
                                <img class="icon-arrow" src="img/arrow-up-right.svg" alt="&rarr;" />
                            </button>
                        </div>
                    </div>

        <div class="rooms-track">
            
            <!-- Card 1 -->
            <article class="room-card h-product">
                <div class="room-card__img-wrapper">
                    <img src="img/room-1.webp" alt="Classic Room" class="room-card__img u-photo" loading="lazy" />
                </div>
                <div class="room-card__content">
                    <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">CLASSIC ROOMS</h3>
                    <p class="text-body-small p-description">30m², up to 2 guests</p>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="room-card h-product">
                <div class="room-card__img-wrapper">
                    <img src="img/room-2.webp" alt="Superior Room" class="room-card__img u-photo" loading="lazy" />
                </div>
                <div class="room-card__content">
                    <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">SUPERIOR ROOMS</h3>
                    <p class="text-body-small p-description">50m², up to 3 guests</p>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="room-card h-product">
                <div class="room-card__img-wrapper">
                    <img src="img/room-3.webp" alt="Deluxe Room" class="room-card__img u-photo" loading="lazy" />
                </div>
                <div class="room-card__content">
                    <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">DELUXE ROOMS</h3>
                    <p class="text-body-small p-description">50m², up to 3 guests</p>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="room-card h-product">
                <div class="room-card__img-wrapper">
                    <img src="img/room-4.webp" alt="Double Deluxe Room" class="room-card__img u-photo" loading="lazy" />
                </div>
                <div class="room-card__content">
                    <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">DOUBLE DELUXE</h3>
                    <p class="text-body-small p-description">80m², up to 5 guests</p>
                </div>
            </article>

        </div>
    </div>
</section>

        <!-- WELLNESS -->
        <section class="section-fullwidth wellness" id="spa-wellness">
          <div class="wellness__grid">
            <div class="wellness__bg-area">
              <img class="wellness__bg-image" src="img/image-4.webp" alt="Spa exterior" loading="lazy" />
            </div>
            <article class="wellness__card">
              <h2 class="text-heading-medium white-color">Wellness treatments</h2>
              <img class="wellness__card-img" src="img/image-2.webp" alt="Massage room" loading="lazy" />
              <p class="text-body-small white-color centered">
                Massage, sauna sessions, beauty treatments such as pedicures and manicures, a fitness room, an outdoor
                children&#39;s pool filled with sea water or a sun terrace to relax on.
              </p>
            </article>
          </div>
        </section> 

        <!-- DINING -->
        <section class="section dining" id="dining">
          <div class="container dining__container">
            <div class="dining__content">
                <div class="dining__text-group">
                    <h2 class="text-heading-large primary-color centered">Dining options<br />with regional specialities</h2>
                    <p class="text-body-large centered">
                     Dining at Ubuntu Haven celebrates the heart of South African cuisine. Fresh vegetables from our gardens
                    and seafood from our nearby shores are infused with regional spices and traditions.
                    </p>
                </div>
                <a href="dining.php" class="button-outline">
                    <span class="button-text">EXPLORE OUR RESTAURANT</span>
                    <img class="icon-arrow" src="img/arrow-up-right.svg" alt="" aria-hidden="true" />
                </a>
            </div>
            
            <div class="dining__image-row">
                <div class="dining__img-wrapper small">
                    <img src="img/dining-interior.webp" alt="Restaurant interior seating" loading="lazy" />
                </div>
                <div class="dining__img-wrapper large">
                    <img src="img/dining-food.webp" alt="Plated gourmet salmon dish" loading="lazy" />
                </div>
                <div class="dining__img-wrapper small">
                    <img src="img/dining-toast.webp" alt="Guests toasting wine glasses" loading="lazy" />
                </div>
            </div>
          </div>
        </section> 

        <!-- BOOKING FORM  -->
        <section class="booking" id="booking">
          <div class="booking__wrapper">
            <img class="booking__bg-image" src="/UBUNTU-HAVEN/img/bg.webp" alt="" aria-hidden="true" loading="lazy" />
            
            <div class="booking__content">
              <h2 class="text-heading-large white-color centered">Plan Your Getaway Today</h2>
              
              <form class="booking-bar h-event" action="process_booking.php" method="POST">
                <input type="hidden" class="p-name" value="Resort Stay" />

                <div class="booking-bar__item">
                  <label for="room_type" class="label-small white-color">Room Type</label>
                  <div class="booking-bar__input-group">
                      <select id="room_type" name="room_type" class="input-text white-color select-reset" required>
                          <option value="Luxury Villa">Luxury Villa (R 4,500)</option>
                          <option value="Garden Villa">Garden Villa (R 3,800)</option>
                          <option value="Family Suite">Family Suite (R 6,200)</option>
                      </select>
                  </div>
                </div>

                <div class="booking-bar__item">
                  <label for="checkin" class="label-small white-color">Check-in</label>
                  <div class="booking-bar__input-group dt-start">
                    <input type="date" id="checkin" name="checkin" class="input-text white-color" required onclick="this.showPicker()" style="cursor: pointer;" min="<?php echo date('Y-m-d'); ?>" />
                  </div>
                </div>
                
                <div class="booking-bar__item">
                  <label for="checkout" class="label-small white-color">Check-out</label>
                  <div class="booking-bar__input-group dt-end">
                    <input type="date" id="checkout" name="checkout" class="input-text white-color" required onclick="this.showPicker()" style="cursor: pointer;" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" />
                  </div>
                </div>
                
                <div class="booking-bar__item">
                  <label for="guests" class="label-small white-color">Guests</label>
                  <div class="booking-bar__input-group">
                      <select id="guests" name="guests" class="input-text white-color select-reset">
                          <option value="1">1 Guest</option>
                          <option value="2">2 Guests</option>
                          <option value="3">3 Guests</option>
                          <option value="4">4 Guests</option>
                      </select>
                  </div>
                </div>
                
                <button type="submit" class="button-filled">
                    <span class="button-text-dark">BOOK YOUR STAY</span>
                </button>
              </form>
            </div>
          </div>
        </section>

        <!-- RECREATION  -->
        <section class="section recreation" id="recreation">
          <div class="container recreation__container">
            <div class="recreation__header">
              <h2 class="text-heading-large primary-color">Island Tours and Surfing Activities</h2>
              <div class="recreation__intro">
                <p class="text-body-large">
                  Beyond relaxation, we offer guided tours to explore the hidden gems of the island. For the adventurous
                  souls, we have surfing lessons suitable for all levels.
                </p>
                <a href="recreation.php" class="button-outline">
                  <span class="button-text">TOUR PACKAGES</span>
                  <img class="icon-arrow" src="img/arrow-up-right.svg" alt="" aria-hidden="true" />
                </a>
              </div>
            </div>
            
            <div class="recreation__cards" id="activity-list">
              <article class="card">
                <div class="card__thumb">
                  <img class="card__img" src="img/image.jpeg" alt="Diver swimming near coral reef" loading="lazy" />
                </div>
                <div class="card__content">
                  <h3 class="text-card-title">DIVING AND SNORKELING</h3>
                  <p class="text-body-small gray-color">
                    Bataxhana Island features seven premier dive sites showcasing spectacular coral reefs and a rich marine ecosystem.
                  </p>
                </div>
              </article>
              <article class="card">
                <div class="card__thumb">
                  <img class="card__img" src="img/image-5.webp" alt="Group trekking in green forest" loading="lazy" />
                </div>
                <div class="card__content">
                  <h3 class="text-card-title">NATURE&#39;S SERENITY TREK</h3>
                  <p class="text-body-small gray-color">
                    A guided journey through lush trails and hidden gems, immersed in the arms of nature.
                  </p>
                </div>
              </article>
              <article class="card">
                <div class="card__thumb">
                    <img class="card__img" src="img/image-25.webp" alt="Dolphins jumping at sunrise" loading="lazy" />
                </div>
                <div class="card__content">
                  <h3 class="text-card-title">DOLPHIN WATCHING</h3>
                  <p class="text-body-small gray-color">
                    Experience a unique and unforgettable feeling in the morning at dawn when watching dolphins at Davina Bay.
                  </p>
                </div>
              </article>
            </div>
          </div>
        </section> 

        <!-- GALLERY  -->
        <section class="section gallery">
            <div class="container gallery__container centered">
                <div class="gallery__text">
                    <h2 class="text-heading-large primary-color">Your Mountain Oasis Awaits</h2>
                    <p class="text-body-large" style="margin: 20px 0;">
                        At Ubuntu Haven, we invite you to experience the harmonious blend of luxury 
                        and nature. Book your escape today and embark on a journey to rejuvenate your
                         senses amidst South Africa’s picturesque mountains.
                    </p>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="button-outline">
                        <span class="button-text">SEE MORE ON INSTAGRAM</span>
                        <img class="icon-arrow" src="img/arrow-up-right.svg" alt="" aria-hidden="true" />
                    </a>
                </div>
            </div>
            
            <div class="gallery__scroll-wrapper">
                <div class="gallery__track">
                    <img src="img/gallery-1.webp" alt="Pool view" loading="lazy" />
                    <img src="img/gallery-2.webp" alt="Mountain hike" loading="lazy" />
                    <img src="img/gallery-3.webp" alt="Yoga deck" loading="lazy" />
                    <img src="img/gallery-4.webp" alt="Bedroom view" loading="lazy" />
                    <img src="img/gallery-1.webp" alt="" aria-hidden="true" />
                </div>
                <div class="gallery__track reverse">
                    <img src="img/gallery-6.webp" alt="Garden path" loading="lazy" />
                    <img src="img/gallery-7.webp" alt="Breakfast spread" loading="lazy" />
                    <img src="img/gallery-8.webp" alt="Sunset view" loading="lazy" />
                    <img src="img/gallery-9.webp" alt="Villa exterior" loading="lazy" />
                    <img src="img/gallery-6.webp" alt="" aria-hidden="true" />
                </div>
            </div>
        </section>

      </main>
    </div>
    <script src="script.js"></script>
  </body>
</html>