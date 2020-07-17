<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MentAi Landing Page</title>
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="./assets/img/favicon.ico"
      type="image/x-icon"
    />
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- Font-awesome -->
    <link rel="stylesheet" href="./assets/css/all.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="./assets/css/magnific-popup.css" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="./assets/css/slick/slick.css" />
    <link rel="stylesheet" href="./assets/css/slick/slick-theme.css" />
    <!-- Animate on Scroll (AOS) CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Custom -->
    <link rel="stylesheet" href="./assets/css/custom.css" />
  </head>
  <body>
    <!-- *** Preloader *** -->
    <div class="preloader">
      <div class="status"></div>
    </div>
    <!-- *** Landing Starts *** -->
    <div class="landing" id="landing">
      <img src="./assets/img/init-arc.svg" alt="Arc" class="body-img" />
      <!-- ** Header Start ** -->
      <header>
        <nav class="navbar">
          <div class="container">
            <a
              class="navbar-brand"
              data-aos="zoom-in"
              data-aos-duration="2000"
              href="./index.html"
            >
              <img
                src="./assets/img/logo-white.svg"
                alt="Logo"
                class="logo-light"
              />
              <img
                src="./assets/img/logo-dark.svg"
                alt="Logo"
                class="logo-dark"
              />
            </a>
            <div class="ml-auto">
              <a
                href="#email"
                class="btn btn-primary"
                data-aos="fade-down"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="1000"
                >Get Notified</a
              >
              <button
                class="btn btn-dark"
                id="theme-switch"
                data-aos="fade-down"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="1000"
              >
                <i class="fas fa-sun fa-lg"></i>
              </button>
            </div>
          </div>
        </nav>
      </header>
      <!-- Header Ends -->

      <!-- ** Hero Starts **  -->
      <div class="hero">
        <div class="content-box">
          <img src="./assets/img/mobile-arc.svg" alt="Arc" class="mobile-arc" />
          <div class="container">
            <div class="row">
              <div class="col-md-7 hero-content-container">
                <div class="hero-content">
                  <!-- Hero Header -->
                  <h1 class="hero-header" data-aos="fade-left">
                    Writing Codes <br />
                    with An
                    <span
                      >Artificial <br />
                      Intelligence</span
                    >
                    Mentor
                  </h1>

                  <!-- Hero Text -->
                  <p class="hero-text" data-aos="fade-right">
                    This app offers simple, bite-sized explainers to help
                    anyone, from beginner to experts, learn how to structure
                    codes to develop working products.
                  </p>

                  <!-- Subscribe Form -->
                  <div class="hero-form">
                    <form method="POST">
                      <label for="email" data-aos="fade-right"
                        >Subcribe for Product Newsletter</label
                      >
                      <div class="custom-input" data-aos="fade-up">
                        <input
                          type="email"
                          id="email"
                          name="email"
                          class="form-control white-mode"
                          placeholder="Email Address"
                        />
                        <button
                          id="subscribe_btn"
                          class="btn btn-primary custom-btn"
                        >
                          Get Notified
                        </button>
                        <button
                          class="btn btn-primary custom-btn d-none"
                          id="loading_btn"
                          type="button"
                          disabled
                        >
                          <span
                            class="spinner-border spinner-border-sm"
                            role="status"
                            aria-hidden="true"
                          ></span>
                          Loading...
                        </button>
                      </div>
                      <div
                        class="custom-checkbox mt-5"
                        data-aos="fade-up-right"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="1000"
                      >
                        <input
                          type="checkbox"
                          class="checkbox"
                          id="agreement"
                          value="on"
                        />
                        <label for="agreement" class="mb-1"
                          >I agree to recieve promotions, discounts and news
                          about this product</label
                        >
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-5 hero-sliders">
                <div
                  class="pages-slider"
                  id="page-sliders"
                  data-aos="zoom-in"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="1000"
                >
                  <!-- Start Page -->
                  <div class="page text-center">
                    <a href="./assets/img/hero-img.svg">
                      <img
                        src="./assets/img/hero-img.svg"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>
                  <!-- Assessment Page -->
                  <div class="page text-center">
                    <a
                      href="./assets/img/pages/Questions.png"
                      title="Assessment Page"
                    >
                      <img
                        src="./assets/img//hero-question.png"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>
                  <!-- Sign Up Page -->
                  <div class="page text-center">
                    <a href="./assets/img/pages/signup.png" title="Sign Up">
                      <img
                        src="./assets/img/signup.png"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>

                  <!-- Login Page -->
                  <div class="page text-center">
                    <a href="./assets/img/pages/LOGIN.png" title="Login Page">
                      <img
                        src="./assets/img/hero-login.png"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>
                  <!-- Dashoard Page -->
                  <div class="page text-center">
                    <a
                      href="./assets/img/pages/DASHBOARD.png"
                      title="Dashboard"
                    >
                      <img
                        src="./assets/img/hero-dashboard.png"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>
                  <!-- Community Page -->
                  <div class="page text-center">
                    <a
                      href="./assets/img/pages/COMMUNITYY.png"
                      title="Community Page"
                    >
                      <img
                        src="./assets/img/hero-community.png"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>
                  <!-- Get Badges Page -->
                  <div class="page text-center">
                    <a
                      href="./assets/img/pages/BADGES.png"
                      title="Get Badges Page"
                    >
                      <img
                        src="./assets/img/hero-badge.png"
                        alt="Slider Item"
                        class="img-fluid"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Ends -->

      <!-- ** Info Section ** -->
      <div class="info">
        <div class="content-box">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="info-heading" data-aos="zoom-in-down">
                  Mentorship Made Easy For Every Enthusiast
                </h2>
                <p class="info-text" data-aos="zoom-in-up">
                  MentAI is an AI that mentors you on how to become and software
                  programmer. With recommends, test and resources, the AI mentor
                  helps you set a curriculum that helps you learn how to write
                  codes and develop software and websites. This AI mentor is
                  designed to drive better than the best human mentors so you
                  can become an expert in months.
                </p>
              </div>
            </div>

            <div class="row info-steps">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="info-step" data-aos="fade-right">
                  <div class="info-step-img mt-3">
                    <svg
                      width="108"
                      height="108"
                      viewBox="0 0 108 108"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="54" cy="54" r="54" fill="#BAD4F2" />
                      <path
                        d="M35.4828 57.9918L48.6339 63.6583C48.7553 63.7079 48.848 63.6441 48.848 63.5165V60.1832C48.848 60.0556 48.7481 59.9137 48.6268 59.8641L39.6001 56.3323C39.4788 56.2827 39.4788 56.2118 39.6001 56.1621L48.6268 52.7083C48.7481 52.6587 48.848 52.5239 48.848 52.3892V49.0276C48.848 48.8999 48.7553 48.8361 48.6339 48.8858L35.4828 54.5522C35.3615 54.6019 35.2688 54.7508 35.2688 54.8785V57.6585C35.2688 57.7933 35.3615 57.9351 35.4828 57.9918ZM51.8593 66.332C52.2303 66.332 52.5086 66.2469 52.7013 66.0837C52.894 65.9206 53.0367 65.6866 53.1366 65.3958C53.2293 65.1051 53.3435 64.7008 53.4648 64.1902L57.2467 48.7226C57.4323 47.9922 57.5322 47.4816 57.5322 47.205C57.5322 46.8291 57.4109 46.5312 57.1754 46.3185C56.9328 46.1057 56.5903 45.9993 56.1407 45.9993C55.6198 45.9993 55.2702 46.1483 55.0846 46.4603C54.9062 46.7653 54.7207 47.3255 54.5209 48.1482L50.7533 63.6157C50.5749 64.4384 50.4821 64.949 50.4821 65.1547C50.4821 65.9419 50.9388 66.332 51.8593 66.332ZM59.3661 63.6796L72.5172 57.9918C72.6385 57.9422 72.7313 57.7933 72.7313 57.6656V54.9139C72.7313 54.7863 72.6385 54.6373 72.5172 54.5877L59.3661 48.9496C59.2448 48.8999 59.152 48.9638 59.152 49.0914V52.3892C59.152 52.5168 59.2519 52.6587 59.3732 52.7083L68.4284 56.1905C68.5497 56.2401 68.5497 56.311 68.4284 56.3607L59.3732 59.8925C59.2519 59.9421 59.152 60.084 59.152 60.2116V63.5448C59.152 63.6654 59.2448 63.7292 59.3661 63.6796ZM81.4725 27H26.5275C24.4581 27 22.7812 28.6666 22.7812 30.7233V77.8848C22.7812 79.9414 24.4581 81.608 26.5275 81.608H81.4725C83.5419 81.608 85.2188 79.9414 85.2188 77.8848V30.7233C85.2188 28.6666 83.5419 27 81.4725 27ZM81.4725 77.8848H26.5275V36.9287H81.4725V77.8848Z"
                        fill="#0073FB"
                      />
                    </svg>
                  </div>
                  <p class="info-step-text" data-aos="flip-left">
                    Coding languages been taught from start to finish.
                    Assessments and coding materials all made avaiable on the
                    app. The mentor woul help users pick what language to start
                    with, to ensure every user has best knowledge of each
                    programming language.
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="info-step" data-aos="flip-down">
                  <div class="info-step-img mt-3">
                    <svg
                      width="108"
                      height="108"
                      viewBox="0 0 108 108"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="54" cy="54" r="54" fill="#BAD4F2" />
                      <path
                        d="M81.8747 28.6182C81.6187 26.9729 80.825 26.222 79.2122 26.1045C78.5017 26.0457 77.7977 26.0196 77.0873 26.0196C61.6049 25.9935 46.1546 25.9935 30.6786 26.0196C29.8274 26.0196 28.9825 26.1045 28.1569 26.2481C26.9984 26.4505 26.4032 27.2863 26.1728 28.4158C26.0896 29.0492 26 29.689 26 30.3224V62.394C26 62.8837 26.0256 63.406 26.0832 63.8957C26.3968 65.7696 27.1009 66.4683 28.9697 66.5205C32.5091 66.5793 36.0421 66.5793 39.6071 66.6054H40.7399V79.8532C40.7399 80.4865 40.7143 81.1786 41.4183 81.4986C42.1288 81.8446 42.5768 81.3811 43.0568 80.924C48.0107 76.3078 52.9325 71.6851 57.9119 67.0951C58.2256 66.8078 58.7632 66.6315 59.2112 66.6315C65.3235 66.5727 71.4358 66.6054 77.5481 66.5727C78.3673 66.5727 79.2186 66.4878 80.0378 66.3442C81.0875 66.1418 81.6507 65.4236 81.8235 64.3789C81.9067 63.7456 81.9963 63.0796 81.9963 62.4136V30.2636C82.0155 29.7151 81.9579 29.1667 81.8747 28.6182ZM34.8964 44.1187H53.9693V48.5063H34.8964V44.1187ZM65.7715 57.5167H34.8964V53.129H65.7715V57.5167ZM73.1319 39.4698H34.8964V35.1083H73.1255V39.4698H73.1319Z"
                        fill="#0073FB"
                      />
                    </svg>
                  </div>
                  <p class="info-step-text">
                    Users have the opportunity to join community setup by the AI
                    Mentor. The AI Mentor sets up group discussion amongst uses
                    for networking. Users get to discuss about their problems,
                    what they don’t understand and solve problems together
                  </p>
                </div>
              </div>
              <div
                class="col-12 col-md-6 mx-auto col-lg-4 mt-md-3 mt-lg-0 mt-0"
              >
                <div class="info-step" data-aos="fade-left">
                  <div class="info-step-img mt-3">
                    <svg
                      width="108"
                      height="108"
                      viewBox="0 0 108 108"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="54" cy="54" r="54" fill="#BAD4F2" />
                      <path
                        d="M71.2558 41.4506V41.0753C71.2558 40.7076 70.9705 40.4149 70.6121 40.4149H34.815C34.4566 40.4149 34.1713 40.7151 34.1713 41.0753V44.4C34.1713 44.7677 34.4566 45.0604 34.815 45.0604H65.3311C67.0573 43.5144 69.0615 42.2836 71.2558 41.4506ZM61.6007 49.5858H34.8004C34.442 49.5858 34.1567 49.8785 34.1567 50.2462V53.5409C34.1567 53.9086 34.4493 54.2013 34.8004 54.2013H59.5965C60.0719 52.5652 60.7522 51.0117 61.6007 49.5858ZM34.8077 59.102C34.4493 59.102 34.164 59.3947 34.164 59.7624V62.952C34.164 63.3197 34.4566 63.6124 34.8077 63.6124H59.1796C58.9382 62.3741 58.8139 61.0833 58.8139 59.7624C58.8139 59.5373 58.8139 59.3121 58.8285 59.0945L34.8077 59.102ZM63.2903 72.3556H26.3887C25.4963 72.3556 24.7722 71.6126 24.7722 70.697V33.3378C24.7722 32.4222 25.4963 31.6792 26.3887 31.6792H69.1931C70.0855 31.6792 71.3582 32.167 72.0385 32.7599C73.4355 33.9907 74.8253 35.214 76.215 36.4523C77.3488 37.458 78.4752 38.4636 79.6017 39.4693C79.865 39.7094 80.1137 40.0396 80.3112 40.4149C81.3791 40.5575 82.425 40.7901 83.4271 41.1053V30.6586C83.4271 29.743 82.703 29 81.8106 29H23.6165C22.7241 29 22 29.743 22 30.6586V73.3762C22 74.2918 22.7241 75.0348 23.6165 75.0348H65.9748C64.9946 74.2318 64.1022 73.3312 63.2903 72.3556ZM85.4825 55.1469C84.9412 54.0662 84.6779 52.9855 84.9193 51.7622C85.168 50.4939 84.7218 49.4958 83.5368 48.9479C82.3153 48.3925 81.401 47.5295 80.8085 46.2912C80.2526 45.1354 79.3018 44.7002 78.1022 44.9703C76.8148 45.263 75.6299 45.0904 74.4596 44.475C73.3624 43.8971 72.331 44.0773 71.5118 45.0454C70.6853 46.021 69.6686 46.5989 68.4397 46.779C67.05 46.9891 66.3405 47.8222 66.1869 49.2256C66.0552 50.4264 65.6236 51.477 64.7605 52.3401C63.7585 53.3458 63.5756 54.479 64.329 55.7473C64.9507 56.7905 65.119 57.9012 64.8922 59.1245C64.6655 60.3328 65.0458 61.3534 66.2161 61.8863C67.5474 62.4942 68.5129 63.4473 69.1639 64.7832C69.3906 65.2485 69.7125 65.5937 70.1148 65.7888V77.7891C70.1148 78.7047 70.4878 78.8097 70.9486 78.0292L74.0938 72.7008C74.5547 71.9203 75.308 71.9203 75.7689 72.7008L78.9141 78.0292C79.3749 78.8097 79.7479 78.7047 79.7479 77.7891V64.7757C79.7479 64.7306 79.7406 64.6931 79.7333 64.6481C80.2526 64.3629 80.8232 64.1678 81.4376 64.0402C82.9371 63.7325 83.4052 63.2071 83.6173 61.6461C83.7855 60.4453 84.2098 59.4172 85.0436 58.5316C86.192 57.3083 86.2652 56.7004 85.4825 55.1469ZM74.8619 62.8994C70.8608 62.8694 67.679 59.5598 67.6863 55.4321C67.701 51.2444 70.8828 47.9948 74.9716 48.0098C78.9141 48.0248 82.1764 51.342 82.1983 55.3646C82.2202 59.4997 78.8775 62.9295 74.8619 62.8994ZM80.5525 55.4546C80.5525 58.6367 78.0364 61.2183 74.935 61.2183C71.8337 61.2183 69.3175 58.6367 69.3175 55.4546C69.3175 52.2726 71.8337 49.6909 74.935 49.6909C78.0364 49.6909 80.5525 52.2726 80.5525 55.4546Z"
                        fill="#0073FB"
                      />
                    </svg>
                  </div>
                  <p class="info-step-text">
                    Users get assessment test and examinations after each
                    module. This would help the mentor know what next step the
                    user needs to take. At the end of it all, each user gets
                    cerifited and the certificate could be shared on Linkedin,
                    Facebook and other Social Networks.
                  </p>
                </div>
              </div>
            </div>

            <!-- Details Guide Section -->
            <div class="row guides">
              <div class="col-md-6 guide">
                <div class="guide-content">
                  <h3 class="guide-heading">
                    The AI Mentor starts off with a mini test to help guide you
                    through your path and where to beginner
                  </h3>
                  <p class="guide-text">
                    Our friendly and intuitive AI assistant guides users through
                    fully configurable workflows for self-service inspections
                    and claims.
                  </p>
                  <a href="#email" class="btn btn-primary">Get Notified</a>
                </div>
              </div>
              <div class="col-md-6 guide-image-container" id="question">
                <a
                  href="./assets/img/pages/Questions.png"
                  title="Questions Page"
                >
                  <img
                    src="./assets/img/questions.svg"
                    alt="Guide"
                    class="guide-img"
                    data-aos="zoom-in-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="1000"
                  />
                </a>
              </div>
            </div>

            <div class="row guides">
              <div
                class="col-md-6 text-center guide-image-container"
                id="signup"
              >
                <a href="./assets/img/pages/signup.png" title="Sign Up Page">
                  <img
                    src="./assets/img/iphone.png"
                    alt="Guide"
                    class="guide-img"
                    data-aos="zoom-in-right"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="1000"
                  />
                </a>
              </div>

              <div class="col-md-6 guide">
                <div class="guide-content">
                  <h3 class="guide-heading">
                    This app is easy to use. Sign Up to get started with MentAI.
                    No credit detail required.
                  </h3>
                  <p class="guide-text">
                    Our friendly and intuitive AI assistant guides users through
                    fully configurable workflows for self-service inspections
                    and claims.
                  </p>
                  <a href="#email" class="btn btn-primary">Get Notified</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ** Description Section ** -->
      <div class="description">
        <div class="content-box">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <h3 class="description-heading">
                  The AI Mentor For Your Programming Career; Let Ment AI Help
                  You Get A Developer Certificate
                </h3>
                <p class="description-text">
                  Learn, Code and Certified on your devices
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Description Section Ends -->

      <!-- ** Working Section ** -->
      <div class="learning">
        <div class="content-box">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center" id="badge">
                <a href="./assets/img/pages/BADGES.png" title="Get Badges">
                  <img
                    src="./assets/img/badges.png"
                    alt="Guide"
                    class="guide-img"
                    data-aos="zoom-in-up"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="1000"
                  />
                </a>
              </div>
              <div class="col-md-6">
                <h3 class="guide-heading">
                  Get reward for your excellence and get into communities to
                  help meet humans, network, help with projects and solve
                  problems
                </h3>
                <div class="text-center" id="community">
                  <a
                    href="./assets/img/pages/COMMUNITYY.png"
                    title="Join the Community"
                  >
                    <img
                      src="./assets/img/badge-2.png"
                      alt="Guide"
                      class="guide-img"
                      data-aos="zoom-in-down"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="1000"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Working Section Ends -->

      <!-- ** Code Preview Section ** -->
      <div class="code">
        <div class="content-box">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h3 class="code-title">
                  The AI Mentor offer coding materials just like any human
                  mentor. It has a feature to help you write, run codes and
                  validate the codes
                </h3>
              </div>
              <div class="col-md-6">
                <div class="code-container">
                  <a href="">
                    <img
                      src="./assets/img/code-sample-1.svg"
                      alt="Code Sample"
                      class="img-fluid code-img code-img-sm"
                    />
                  </a>
                  <a href="">
                    <img
                      src="./assets/img/code-sample-2.svg"
                      alt="Code Sample"
                      class="img-fluid code-img code-img-lg"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Code Preview Ends -->

      <!-- ** Launch Section ** -->
      <div class="launch">
        <div class="content-box">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h3 class="launch-heading">
                  Product Launchs Soon, Follow The Count Down
                </h3>
                <p class="launch-text">
                  MentAI is an AI would deploy its beta stage for testing in the
                  next 10 day and a reiteration would be made based on the
                  feedback we get. We want to be able to carry our users along,
                  as such we would be send out links to you for the beta stage
                  testing. I would give an insight of how the mentor app works
                  from action to successfull. Anticipate relaunch after 10days
                  again.
                </p>
              </div>
            </div>
            <!-- Launch Image -->
            <div class="row">
              <div class="col-md-10 mx-auto text-center">
                <img
                  src="./assets/img/launch.svg"
                  alt="Launch Icon"
                  class="img-fluid"
                />
              </div>
            </div>

            <!-- Count Down -->
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div
                  class="launch-countdown row no-gutters"
                  data-aos="flip-down"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="1000"
                >
                  <div class="col-md-3 col-3 countdown">
                    <span class="time days">0</span>
                    <span class="delimeter"></span>
                    Days
                  </div>
                  <div class="col-md-3 col-3 countdown">
                    <span class="time hours">0</span>
                    <span class="delimeter"></span>
                    Hours
                  </div>
                  <div class="col-md-3 col-3 countdown">
                    <span class="time minutes">0</span>
                    <span class="delimeter"></span>
                    Minutes
                  </div>
                  <div class="col-md-3 col-3 countdown">
                    <span class="time seconds">0</span>
                    Seconds
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Launch Ends -->

      <!--  ** Board Section ** -->
      <div class="board">
        <div class="content-box">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <img
                  src="./assets/img/footer-phone.png"
                  alt="Board"
                  class="img-fluid"
                />
              </div>
              <div class="col-md-8 col-8 ml-auto">
                <h3 class="board-title">
                  Be the first to know
                </h3>
                <p class="board-text">
                  This product is built to help you, as such we want you t be
                  part of every process. Kindly provide the detail below to get
                  a notification for the first testing phase. We want you to
                  have the first experience
                </p>
                <a href="#email" class="btn btn-primary">Notify Me</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Board Ends -->

      <!-- *** Video Section *** -->
      <div class="video">
        <div class="content-box">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <video width="100%" height="100%" controls>
                  <source src="./assets/mentai.mp4" type="video/mp4" />
                  Your browser does not support the video tag.
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ** Footer ** -->
      <footer class="footer text-center">
        <p class="copyright">2020 &copy; Copyrights Reserved</p>
      </footer>
      <!-- Footer -->

      <!-- Scroll Up -->
      <div class="toUp">
        <a href="#landing" class="img-fluid">
          <svg
            width="52"
            height="62"
            viewBox="0 0 52 62"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M28.4089 0.990978L50.7998 23.3814C51.439 24.0205 51.7898 24.8724 51.7898 25.7807C51.7898 26.69 51.4385 27.5414 50.7998 28.1805L48.7664 30.2134C48.1283 30.8521 47.2759 31.2039 46.3671 31.2039C45.4588 31.2039 44.5777 30.8521 43.9396 30.2134L30.8486 17.1512L30.8486 58.6505C30.8486 60.5216 29.3838 62 27.5122 62L24.6375 62C22.766 62 21.1535 60.5216 21.1535 58.6505L21.1535 17.003L7.98942 30.2129C7.35027 30.8516 6.52109 31.2034 5.61227 31.2034C4.70446 31.2034 3.86318 30.8516 3.22453 30.2129L1.1977 28.18C0.558556 27.5409 0.210251 26.6895 0.210251 25.7802C0.210251 24.8719 0.563092 24.02 1.20224 23.3809L23.5926 0.990474C24.2338 0.349811 25.0897 -0.00252565 25.9995 -4.12224e-06C26.9124 -0.00202209 27.7688 0.349811 28.4089 0.990978Z"
              fill="white"
            />
          </svg>
        </a>
      </div>
    </div>
    <!-- Landing Ends -->

    <!-- jquery -->
    <script src="./assets/js/jquery.min.js"></script>
    <!-- popper.js -->
    <script src="./assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- font-awesome -->
    <script src="./assets/js/all.js"></script>
    <!-- Magnific Popup -->
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="./assets/js/slick/slick.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Animate on Scroll (AOS) JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom -->
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
