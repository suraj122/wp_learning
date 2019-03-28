<main>
      <!-- Hero Section -->
      <section class="hero">
        <img class="hero__image img-responsive" src="<?php echo get_theme_file_uri('/images/hero4.png') ?>" alt="" />
        <!-- Header -->
        <?php get_header(); ?>

        <div class="container">
          <!-- Hero Contents -->
          <div class="hero__content">
            <h1 class="hero__heading">
              <strong class="hero__heading-text">Enabling</strong>
              <strong class="hero__heading-text1">Young Minds</strong>
              <strong class="hero__heading-text hero__heading-text2">
                to fly high
              </strong>
            </h1>
            <p class="hero__text">
              Airytails believes in early nurturing of kids who are inclined
              towards aviation and aeromodelling.
            </p>
            <button class="btn btn-primary">Learn More</button>
          </div>
        </div>
        <div class="scroll flex-start">
          <img src="<?php echo get_theme_file_uri('images/scroller.svg') ?>" alt="" />
          <p>Scroll Down</p>
        </div>
      </section>

      <!-- About Section -->
      <section class="padding about-section">
        <img class="bg-img img-responsive" src="<?php echo get_theme_file_uri('images/bg3.svg') ?>" alt="" />
        <div class="container">
          <h2 class="heading">About us</h2>
          <div class="grid-col2">
            <div class="content">
              <h3 class="secondary-heading">
                Airytails is a team of passionate aviation and aeromodelling
                enthusiasts.
              </h3>
              <p class="main-text">
                We are constantly looking forward to impart the enthralling
                skills of the subject, to young minds inclined towards it or
                seeking to explore their attitude towards establishing it as a
                full-fledged career. We offer an array of aeronautical services
                which includes both education and leisure.
              </p>
              <button class="btn btn-secondary">Know more</button>
            </div>
            <div class="aside">
              <img class="img-responsive" src="<?php echo get_theme_file_uri('images/03.png') ?>" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- Service Section -->
      <section class="padding">
        <div class="container">
          <div class="service-section">
            <div class="service-section__item service-section__item1">
              <img class="img-responsive" src="<?php echo get_theme_file_uri('images/07.jpg') ?>" alt="" />
              <h4
                class="service-section__item-heading service-section__item-heading1"
              >
                AERO adventure
              </h4>
            </div>
            <div class="service-section__item service-section__item2">
              <img class="img-responsive" src="<?php echo get_theme_file_uri('images/04.jpg') ?>" alt="" />
              <div class="service-section__content">
                <h4>AERO Workshops</h4>
                <hr />
                <p>
                  We are constantly looking forward to impart the enthralling
                  skills of the subject, to young minds inclined towards it or
                  seeking to explore their attitude towards establishing it as a
                  full-fledged career.
                </p>
                <button class="btn">LEARN MORE</button>
              </div>
            </div>
            <div class="service-section__item service-section__item3">
              <img class="img-responsive" src="<?php echo get_theme_file_uri('images/05.jpg') ?>" alt="" />

              <h4
                class="service-section__item-heading service-section__item-heading2"
              >
                AERO Labs
              </h4>
            </div>
          </div>
        </div>
      </section>

      <!-- Workshop Section -->
      <section class="padding workshop-section">
        <img class="bg-img img-responsive" src="<?php echo get_theme_file_uri('images/bg3.svg') ?>" alt="" />
        <div class="container">
          <h2 class="heading">Upcoming Workshops</h2>
          <!-- Carousel -->
          <div class="carousel">
            <input type="radio" class="gallery-radio" name="images" id="i1" />
            <input type="radio" name="images" id="i2" />
            <input type="radio" name="images" id="i3" checked />
            <input type="radio" name="images" id="i4" />
            <input type="radio" name="images" id="i5" />
            <div class="carousel__item" id="one">
              <img class="carousel__img" src="images/01.png" alt="" />
              <div class="carousel__content">
                <h5>Junior Pilot - Introduction to World of Aeroplanes</h5>
                <p>
                  A workshop to engage and educate kids to the world of
                  AEROPLANES
                </p>
                <p>
                  Date : 10th March 2019 Time : 03:00 PM - 06:00 PM Location :
                  Studio Pepperfry, Yelahanka
                </p>
              </div>
              <label for="i5" class="pre">
                <i class="fas fa-angle-left"></i>
              </label>
              <label for="i2" class="next">
                <i class="fas fa-angle-right"></i>
              </label>
            </div>
            <div class="carousel__item" id="two">
              <img class="carousel__img" src="<?php echo get_theme_file_uri('images/04.jpg') ?>" alt="" />
              <div class="carousel__content">
                <h5>Junior Pilot - Introduction to World of Aeroplanes</h5>
                <p>
                  A workshop to engage and educate kids to the world of
                  AEROPLANES
                </p>
                <p>
                  Date : 10th March 2019 Time : 03:00 PM - 06:00 PM Location :
                  Studio Pepperfry, Yelahanka
                </p>
              </div>
              <label for="i1" class="pre">
                <i class="fas fa-angle-left"></i>
              </label>
              <label for="i3" class="next">
                <i class="fas fa-angle-right"></i>
              </label>
            </div>
            <div class="carousel__item" id="three">
              <img class="carousel__img" src="<?php echo get_theme_file_uri('images/02.png') ?>" alt="" />
              <div class="carousel__content">
                <h5>Junior Pilot - Introduction to World of Aeroplanes</h5>
                <p>
                  A workshop to engage and educate kids to the world of
                  AEROPLANES
                </p>
                <p>
                  Date : 10th March 2019 Time : 03:00 PM - 06:00 PM Location :
                  Studio Pepperfry, Yelahanka
                </p>
              </div>
              <label for="i2" class="pre">
                <i class="fas fa-angle-left"></i>
              </label>
              <label for="i4" class="next">
                <i class="fas fa-angle-right"></i>
              </label>
            </div>
            <div class="carousel__item" id="four">
              <img class="carousel__img" src="<?php echo get_theme_file_uri('images/05.jpg') ?>" alt="" />
              <div class="carousel__content">
                <h5>Junior Pilot - Introduction to World of Aeroplanes</h5>
                <p>
                  A workshop to engage and educate kids to the world of
                  AEROPLANES
                </p>
                <p>
                  Date : 10th March 2019 Time : 03:00 PM - 06:00 PM Location :
                  Studio Pepperfry, Yelahanka
                </p>
              </div>
              <label for="i3" class="pre">
                <i class="fas fa-angle-left"></i>
              </label>
              <label for="i5" class="next">
                <i class="fas fa-angle-right"></i>
              </label>
            </div>
            <div class="carousel__item" id="five">
              <img class="carousel__img" src="<?php echo get_theme_file_uri('images/07.jpg') ?>" alt="" />
              <div class="carousel__content">
                <h5>Junior Pilot - Introduction to World of Aeroplanes</h5>
                <p>
                  A workshop to engage and educate kids to the world of
                  AEROPLANES
                </p>
                <p>
                  Date : 10th March 2019 Time : 03:00 PM - 06:00 PM Location :
                  Studio Pepperfry, Yelahanka
                </p>
              </div>
              <label for="i4" class="pre">
                <i class="fas fa-angle-left"></i>
              </label>
              <label for="i1" class="next">
                <i class="fas fa-angle-right"></i>
              </label>
            </div>
            <!-- Carousel Nav -->
            <div class="carousel__nav">
              <label for="i1" class="carousel__nav-item" id="nav1"
                ><span class="dot"></span><span>Workshop 1</span></label
              >
              <label for="i2" class="carousel__nav-item" id="nav2"
                ><span class="dot"></span><span>Workshop 2</span></label
              >
              <label for="i4" class="carousel__nav-item" id="nav4"
                ><span class="dot"></span><span>Workshop 4</span></label
              >
              <label for="i5" class="carousel__nav-item" id="nav5"
                ><span class="dot"></span><span>Workshop 5</span></label
              >
              <label for="i3" class="carousel__nav-item" id="nav3"
                ><span class="dot"></span><span>Junior Pilot</span></label
              >
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-secondary">Know more</button>
          </div>
        </div>
      </section>
      <!-- Store Section -->
      <!-- <section class="padding store-section">
        <div class="container">
          <h2 class="heading">Featured Products</h2>
          <div class="grid-col4">
            <div class="store__item">
              <img class="img-responsive" src="images/store/02.jpg" alt="" />
              <div class="store__item-details flex-between">
                <p>Badge</p>
                <a href="">Shop Now</a>
              </div>
              <img class="logo-mark" src="images/favicon.png" alt="" />
            </div>
            <div class="store__item">
              <img class="img-responsive" src="images/store/03.png" alt="" />
              <div class="store__item-details flex-between">
                <p>Pendant</p>
                <a href="">Shop Now</a>
              </div>
              <img class="logo-mark" src="images/favicon.png" alt="" />
            </div>
            <div class="store__item">
              <img class="img-responsive" src="images/store/04.png" alt="" />
              <div class="store__item-details flex-between">
                <p>Ring</p>
                <a href="">Shop Now</a>
              </div>
              <img class="logo-mark" src="images/favicon.png" alt="" />
            </div>
            <div class="store__item">
              <img class="img-responsive" src="images/store/05.jpg" alt="" />
              <div class="store__item-details flex-between">
                <p>Glider</p>
                <a href="">Shop Now</a>
              </div>
              <img class="logo-mark" src="images/favicon.png" alt="" />
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-secondary">check out our store</button>
          </div>
        </div>
      </section> -->

      <!-- Testimonial -->
      <section class="padding">
        <div class="container">
          <div class="testimonial">
            <img class="bg-img img-responsive" src="<?php echo get_theme_file_uri('images/bg3.png') ?>" alt="" />
            <h2 class="heading">TESTIMONIALS</h2>
            <div class="testimonial__wrapper">
              <div class="testimonial__avatar-box">
                <img
                  class="testimonial__avatar"
                  src="<?php echo get_theme_file_uri('images/testimonial/01.png') ?>"
                  alt=""
                />
                <div class="testimonial__circle"></div>
              </div>
              <div class="testimonial__content">
                <p>
                  Rishabh enjoyed the complete Sunday thoroughly in knowing what
                  it takes to fly an airplane. Though he was just less than 6
                  years old, the whole workshop was so kid-friendly that he was
                  on his toes throughout the 4 hrs. of the workshop. Later while
                  flying the model plane, he was right at the front to
                  experience it. Thanks a ton to Ashwini and team for trigger
                  the interest in airplanes.
                </p>
                <h5>
                  <span>Naren (Rishab's Dad)</span> |
                  <span>#takethefirststep</span>
                </h5>
              </div>
            </div>
            <!-- Testimonial Navigation -->
            <div class="testimonial__nav text-center">
              <label class="testimonial__nav-dot active"></label>
              <label class="testimonial__nav-dot"></label>
              <label class="testimonial__nav-dot"></label>
              <label class="testimonial__nav-dot"></label>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <?php get_footer(); ?>
    </main>