<?php 
$page_title = 'Accommodation | Ubuntu Haven Resort';
$hero_image = 'img/acomm.webp';
include 'includes/header.php'; 
?>
        <div class="hero__content">
          <p class="hero__subtitle">UBUNTU HAVEN RESORT</p>
          <h1 class="hero__title">Rest, Recharge and Reconnect</h1>
          <div class="hero__scroll-indicator" aria-hidden="true" style="margin-top: 40px;">
            <img src="img/frame-152.png" alt="" />
          </div>
        </div>
      </header>

      <main id="main-content">
        <section class="section">
          <div class="container">
            
            <article class="feature-row h-product">
                <img class="feature-row__img u-photo" src="img/luxury.jpeg" alt="Luxury Villa Exterior" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color p-name">Luxury Villas</h2>
                    <p class="text-body-large p-description">
                        Experience absolute privacy in our standalone luxury villas. 
                        Perched on the hillside, each villa features a private infinity pool, 
                        spacious living area, and panoramic views of the ocean.
                    </p>
                    <p class="price-tag">From R 4,500 / night</p>
                    <a href="contact.php" class="button-outline">CHECK AVAILABILITY</a>
                </div>
            </article>

            <article class="feature-row h-product">
                <img class="feature-row__img u-photo" src="img/family.webp" alt="Family Suite Interior" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color p-name">Family Suites</h2>
                    <p class="text-body-large p-description">
                        Designed for connection, our family suites offer two interconnecting 
                        bedrooms and a large communal deck. Safe for children and relaxing for parents.
                    </p>
                    <p class="price-tag">From R 6,200 / night</p>
                    <a href="contact.php" class="button-outline">CHECK AVAILABILITY</a>
                </div>
            </article>

            <article class="feature-row h-product">
                <img class="feature-row__img u-photo" src="img/garden.webp" alt="Garden Villa Exterior" />
                <div class="feature-row__content">
                    <h2 class="text-heading-large primary-color p-name">Garden Villa</h2>
                    <p class="text-body-large p-description">
                        Immerse yourself in the lush flora of the Western Cape. Our Garden Villas 
                        offer a secluded sanctuary surrounded by indigenous plants, featuring a 
                        private patio and an outdoor hammock for lazy afternoons.
                    </p>
                    <p class="price-tag" style="font-weight: 700; font-size: 20px; color: var(--gray-800);">From R 3,800 / night</p>
                    <a href="contact.php" class="button-outline">CHECK AVAILABILITY</a>
                </div>
            </article>

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
                    
                    <article class="room-card h-product">
                        <div class="room-card__img-wrapper">
                            <img src="img/room-1.webp" alt="Classic Room" class="room-card__img u-photo" loading="lazy" />
                        </div>
                        <div class="room-card__content">
                            <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">CLASSIC ROOMS</h3>
                            <p class="text-body-small p-description">30m², up to 2 guests</p>
                        </div>
                    </article>

                    <article class="room-card h-product">
                        <div class="room-card__img-wrapper">
                            <img src="img/room-2.webp" alt="Superior Room" class="room-card__img u-photo" loading="lazy" />
                        </div>
                        <div class="room-card__content">
                            <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">SUPERIOR ROOMS</h3>
                            <p class="text-body-small p-description">50m², up to 3 guests</p>
                        </div>
                    </article>

                    <article class="room-card h-product">
                        <div class="room-card__img-wrapper">
                            <img src="img/room-3.webp" alt="Deluxe Room" class="room-card__img u-photo" loading="lazy" />
                        </div>
                        <div class="room-card__content">
                            <h3 class="text-heading-medium p-name" style="font-size: 24px; margin-bottom: 8px;">DELUXE ROOMS</h3>
                            <p class="text-body-small p-description">50m², up to 3 guests</p>
                        </div>
                    </article>

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

            <!-- AMENITIES -->
            <div style="margin: 60px 0; text-align: center;">
                <h2 class="text-heading-medium primary-color">Room Amenities</h2>
            </div>

            <div class="amenities-grid">
                <div class="amenity-item">
                    <h3 class="text-body-large">High-Speed WiFi</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Climate Control</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Organic Coffee</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Smart Safe</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Mini Bar</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Hair Dryer</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Smart TV</h3>
                </div>
                <div class="amenity-item">
                    <h3 class="text-body-large">Luxury Bathrobes</h3>
                </div>
            </div>

            <!-- PRICE LIST TABLE -->
            <div style="margin-top: 90px; width: 100%;">
                <h2 class="text-heading-medium primary-color">2025 Price List</h2>
                <table class="price-table">
                    <caption>All prices are in South African Rand (ZAR) and include tax.</caption>
                    <thead>
                        <tr>
                            <th scope="col">Room Type</th>
                            <th scope="col">Capacity</th>
                            <th scope="col">Price Per Night</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Luxury Villa (Ocean View)</td>
                            <td>2 Adults</td>
                            <td class="price-tag">R 4,500</td>
                        </tr>
                        <tr>
                            <td>Garden Villa</td>
                            <td>2 Adults</td>
                            <td class="price-tag">R 3,800</td>
                        </tr>
                        <tr>
                            <td>Family Suite</td>
                            <td>2 Adults, 2 Kids</td>
                            <td class="price-tag">R 6,200</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </section>
      </main>

        <!-- FOOTER  -->
        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="script.js"></script>
  </body>
</html>