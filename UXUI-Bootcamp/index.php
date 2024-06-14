<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+Tamil:wght@100..900&family=Playpen+Sans:wght@100..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Mono+One&display=swap"
    rel="stylesheet" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- fav-icon -->
  <link rel="shortcut icon" href="Assets/img/sot-icon.png" type="image/x-icon">
  <!-- Css -->
  <link rel="stylesheet" href="./Assets/Css/style.css" />
  <!-- <link rel="stylesheet" href="./Assets/Css/responsive.css"> -->
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
    integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
            integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>
  <section id="desktop-version">
    <div class="hero-bg-image">
      <div class="logo">
        <a href=""><img src="./Assets/img/logo.png" class="sot-logo ms-5 mt-5" alt /></a>
      </div>

      <div class="button">
        <h4><b class="fs-2">5</b> <span class="fw-lighter">Days</span></h4>
      </div>

      <div class="heading text-center">
        <h1>
          UXUI <span class="fw-light">DESIGN</span> <br />
          <span style="color: #ffbc05; font-weight: 900 !important">BOOTCAMP</span>
        </h1>
      </div>

      <div class="container">
        <div class="row p-5">
          <div class="col-lg">
            <a href=""><img src="./Assets/img/YOUTUBE-THUMBNAIL-img.png" alt /></a>
          </div>
          <div class="col-lg">
            <div class="main-div d-flex justify-content-center gap-5">
              <div class="sub-div">
                <div class="d-flex d-inline-block icon-class">
                  <i class="bi bi-calendar-event-fill"></i>
                  <p>May 27 <sup>th</sup></p>
                </div>
              </div>
              <div class="sub-div">
                <div class="d-flex d-inline-block icon-class">
                  <i class="bi bi-hourglass-bottom"></i>
                  <p class>3 Hour</p>
                </div>
              </div>
              <div class="sub-div">
                <div class="d-flex d-inline-block icon-class">
                  <i class="bi bi-globe"></i>
                  <p>Online</p>
                </div>
              </div>
            </div>
            <div class="text-box mt-3 text-light p-3 fw-lighter">
              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum is simply dummy
                text of the printing and typesetting industry. Lorem Ipsum is
                simply dummy text of the printing and typesetting industry.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
            class="hero-btn">Register Now</button>
        </div>
      </div>
    </div>
  </section>

  <section class="desk-float" id="desktop-version">
    <div class="background-fab">
      <div class="fab">
        <div>
          <h1 class="fw-bold timer-text" style="color: #ffbc05">₹ 299/-</h1>
        </div>
        <div class="countdown">
          <div class="landing">
            <div class="landing-inner">
              <div class="countdown"></div>
            </div>
          </div>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
          class="hero-btn1">Register Now</button>
      </div>
    </div>
  </section>

  <section class="fixed-sec" id="mobile-version">
    <div class="background-fab">
      <div class="fab">
        <div>
          <h1 class="fw-bold timer-text" style="color: #ffbc05">₹ 299/-</h1>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
          class="hero-btn1">Register Now</button>
      </div>
    </div>
  </section>

  <section class="banner-head" id="mobile-version">
    <div>
      <div class="main-logo">
        <img src="./Assets/img/logo.png" alt="" />
      </div>
      <div class="heading text-center m-align">
        <h1 class="fs-1">
          UXUI <span class="fw-light">DESIGN</span> <br />
          <span class="boot" style="color: #ffbc05; font-weight: 900 !important">BOOTCAMP</span>
        </h1>
        <img class="clip" src="Assets/img/clip.png" alt="" />
      </div>
      <div class="text-center">
        <img src="./Assets/img/YOUTUBE-THUMBNAIL-img.png" alt="" class="you-img" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="d-flex ms-auto me-auto gap-3 dates">
              <button class="date-btn">
                <i class="bi bi-calendar-event-fill"></i> <span>May27</span><sup>th</sup>
              </button>
              <button class="date-btn">
                <i class="bi bi-clock-fill"></i> <span>10:00 am</span>
              </button>
              <button class="date-btn">
                <i class="bi bi-broadcast"></i> <span>Online</span>
              </button>
            </div>

            <div class="d-flex ms-auto me-auto gap-3 dates">
              <button class="date-btn">
                <i class="bi bi-calendar-event-fill"></i> <span>May27</span><sup>th</sup>
              </button>
              <button class="date-btn">
                <i class="bi bi-clock-fill"></i> <span>10:00 am</span>
              </button>
              <button class="date-btn">
                <i class="bi bi-broadcast"></i> <span>Online</span>
              </button>
            </div>
            <div class="mobile-box">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Excepturi, labore.
              </p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
            class="m-hero-btn">Register Now</button>
        </div>
      </div>
    </div>
  </section>
  <div id="second-section"></div>

  <section>
    <!-- heading- pre Requirement -->
    <div class="container box-aligng align-box">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Pre- <span style="color: #ffbc05">Requirements</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
        <div class="mob-img" id="mobile-version">
          <img src="Assets/img/mob-img.png" alt="" />
        </div>
      </div>
    </div>

    <!-- Content -->

    <div id="desktop-version" class="container">
      <div class="row">
        <div class="col">
          <div class="box"></div>
          <div class="box-main">
            <div class="box-icon">
              <img src="./Assets/img/laptop.png" alt width="150px" />
            </div>
            <div class="box-icon">
              <img src="./Assets/img/internet.png" alt width="150px" />
            </div>
            <div class="box-icon">
              <img src="./Assets/img/figma.png" alt width="150px" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Modules for
              <span style="color: #ffbc05">5 days UXUI Bootcamp</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <style>
      .lol {
        position: relative;
        height: 100vh;
        /* Set height to full viewport height */
        display: flex;
        justify-content: center;
        align-items: flex-start;
      }

      .main-carousel {
        height: 80%;
        /* Adjust as needed */
        width: 100%;
        overflow-y: auto;
        overflow-x: hidden;
        /* Ensure no horizontal scroll */
        position: relative;
        display: flex;
        flex-direction: column;
        scroll-behavior: smooth;
        scroll-snap-type: y mandatory;
        /* Enable scroll snapping */
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
        scrollbar-width: none;
        /* Firefox */
      }

      .main-carousel::-webkit-scrollbar {
        display: none;
        /* Safari and Chrome */
      }

      .carousel-item {
        height: 100%;
        flex: 0 0 100%;
        /* Ensure each item takes up full height */
        display: flex;
        align-items: flex-start;
        justify-content: center;
        scroll-snap-align: start;
        /* Snap items to start */
      }

      .modul-card {
        background: #444;
        padding: 20px;
        border-radius: 10px;
      }
    </style>

    <div id="mobile-version" class="container lol">
      <div id="carousel" class="carousel main-carousel">
        <!-- Repeat these carousel items as needed -->
        <div class="carousel-item">
          <div class="card-random row mt-5">
            <div class="col align mar text-center">
              <div class="modul-card text-light text-start">
                <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Introduction Of <span style="color: #ffbc05">UXUI</span>
                </li>
                <ol>
                  <li>What is UXUI?</li>
                  <li>Why UXUI is so trending?</li>
                  <li>Campers Project Kickstart</li>
                </ol>
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Figma <span style="color: #ffbc05">Session</span>
                </li>
                <ol>
                  <li>Figma & FigJam</li>
                  <li>Basic Tools</li>
                  <li>Campers Project Kickstart</li>
                  <li>FigJam Templates</li>
                  <li>Inside Bootcamp</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Add more .carousel-item here -->

        <div class="carousel-item">
          <div class="card-random row mt-5">
            <div class="col align mar text-center">
              <div class="modul-card text-light text-start">
                <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Introduction the <span style="color: #ffbc05">UXUI</span>
                </li>
                <ol>
                  <li>What is UXUI?</li>
                  <li>Why UXUI is so trending?</li>
                  <li>Campers Project Kickstart</li>
                </ol>
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Figma <span style="color: #ffbc05">Session</span>
                </li>
                <ol>
                  <li>Figma & FigJam</li>
                  <li>Basic Tools</li>
                  <li>Campers Project Kickstart</li>
                  <li>FigJam Templates</li>
                  <li>Inside Bootcamp</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card-random row mt-5">
            <div class="col align mar text-center">
              <div class="modul-card text-light text-start">
                <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Introduction the <span style="color: #ffbc05">UXUI</span>
                </li>
                <ol>
                  <li>What is UXUI?</li>
                  <li>Why UXUI is so trending?</li>
                  <li>Campers Project Kickstart</li>
                </ol>
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Figma <span style="color: #ffbc05">Session</span>
                </li>
                <ol>
                  <li>Figma & FigJam</li>
                  <li>Basic Tools</li>
                  <li>Campers Project Kickstart</li>
                  <li>FigJam Templates</li>
                  <li>Inside Bootcamp</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card-random row mt-5">
            <div class="col align mar text-center">
              <div class="modul-card text-light text-start">
                <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Introduction the <span style="color: #ffbc05">UXUI</span>
                </li>
                <ol>
                  <li>What is UXUI?</li>
                  <li>Why UXUI is so trending?</li>
                  <li>Campers Project Kickstart</li>
                </ol>
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Figma <span style="color: #ffbc05">Session</span>
                </li>
                <ol>
                  <li>Figma & FigJam</li>
                  <li>Basic Tools</li>
                  <li>Campers Project Kickstart</li>
                  <li>FigJam Templates</li>
                  <li>Inside Bootcamp</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card-random row mt-5">
            <div class="col align mar text-center">
              <div class="modul-card text-light text-start">
                <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Introduction the <span style="color: #ffbc05">UXUI</span>
                </li>
                <ol>
                  <li>What is UXUI?</li>
                  <li>Why UXUI is so trending?</li>
                  <li>Campers Project Kickstart</li>
                </ol>
                <li class="main-li" style="font-size: 19px; font-weight: bold">
                  Figma <span style="color: #ffbc05">Session</span>
                </li>
                <ol>
                  <li>Figma & FigJam</li>
                  <li>Basic Tools</li>
                  <li>Campers Project Kickstart</li>
                  <li>FigJam Templates</li>
                  <li>Inside Bootcamp</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="desktop-version" class="container">
      <div class="card-random row mt-5">
        <div class="col align mar text-center">
          <div class="modul-card text-light text-start">
            <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
            <li style="font-size: 19px; font-weight: bold">
              Introduction Of <span style="color: #ffbc05">UXUI</span>
            </li>
            <ol>
              <li>What is UXUI?</li>
              <li>Why UXUI is so trending?</li>
              <li>Campers Project Kickstart</li>
            </ol>
            <li style="font-size: 19px; font-weight: bold">
              Figma <span style="color: #ffbc05">Session</span>
            </li>
            <ol>
              <li>Figma & FigJam</li>
              <li>Basic Tools</li>
              <li>Campers Project Kickstart</li>
              <li>FigJam Templates</li>
              <li>Inside Bootcamp</li>
            </ol>
          </div>
        </div>
        <div class="col align mar text-center">
          <div class="modul-card text-light text-start">
            <img src="./Assets/img/modules-two.png" class="float-end" width="12%" alt />
            <li style="font-size: 19px; font-weight: bold">
              Website <span style="color: #ffbc05">Design</span>
            </li>
            <ol>
              <li>User Flow Diagram</li>
              <li>Low-Fi Wen UI Components</li>
              <li>sketch - Paper Task</li>
              <li>Low-Fi Screens</li>
              <li>Desktop/Mobile</li>
            </ol>
            <li style="font-size: 19px; font-weight: bold">
              Figma<span style="color: #ffbc05">Session </span>
            </li>
            <ol>
              <li>Tools Overview</li>
              <li>Design Properties</li>
              <li>Frames | Pages | Layers</li>
            </ol>
          </div>
        </div>
        <div class="col align mar text-center">
          <div class="modul-card text-light text-start">
            <img src="./Assets/img/modules-three.png" class="float-end" width="12%" alt />
            <li style="font-size: 19px; font-weight: bold">
              Visual Design<span style="color: #ffbc05"> Figma Session </span>
            </li>
            <ol>
              <li>Basics of Design Fundamentals</li>
              <li>Principles, Typography & Color.</li>
              <li>Basics of Iconography</li>
              <li>Design De Code</li>
            </ol>
            <li style="font-size: 19px; font-weight: bold">
              Figma<span style="color: #ffbc05">Session </span>
            </li>
            <ol>
              <li>Mid-Fi Website Screens</li>
              <li>Mid-Fi Website Screens in Figma</li>
              <li>Desktop & Mobile website version</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col align mar text-center">
          <div class="modul-card text-light text-start">
            <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
            <li style="font-size: 19px; font-weight: bold">
              Visual Design<span style="color: #ffbc05"> Figma Session </span>
            </li>
            <ol>
              <li>Basics of Design Fundamentals</li>
              <li>Principles, Typography & Color.</li>
              <li>Basics of Iconography</li>
              <li>Design De Code</li>
            </ol>
            <li style="font-size: 19px; font-weight: bold">
              Figma<span style="color: #ffbc05">Session </span>
            </li>
            <ol>
              <li>Mid-Fi Website Screens</li>
              <li>Mid-Fi Website Screens in Figma</li>
              <li>Desktop & Mobile website version</li>
            </ol>
          </div>
        </div>
        <div class="col align mar text-center">
          <div class="modul-card text-light text-start">
            <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
            <li style="font-size: 19px; font-weight: bold">
              Visual Design<span style="color: #ffbc05"> Figma Session </span>
            </li>
            <ol>
              <li>Basics of Design Fundamentals</li>
              <li>Principles, Typography & Color.</li>
              <li>Basics of Iconography</li>
              <li>Design De Code</li>
            </ol>
            <li style="font-size: 19px; font-weight: bold">
              Figma<span style="color: #ffbc05">Session </span>
            </li>
            <ol>
              <li>Mid-Fi Website Screens</li>
              <li>Mid-Fi Website Screens in Figma</li>
              <li>Desktop & Mobile website version</li>
            </ol>
          </div>
        </div>
        <div class="col align mar text-center">
          <div class="modul-card text-light text-start">
            <img src="./Assets/img/modules-one.png" class="float-end" width="12%" alt />
            <li style="font-size: 19px; font-weight: bold">
              Visual Design<span style="color: #ffbc05"> Figma Session </span>
            </li>
            <ol>
              <li>Basics of Design Fundamentals</li>
              <li>Principles, Typography & Color.</li>
              <li>Basics of Iconography</li>
              <li>Design De Code</li>
            </ol>
            <li style="font-size: 19px; font-weight: bold">
              Figma<span style="color: #ffbc05">Session </span>
            </li>
            <ol>
              <li>Mid-Fi Website Screens</li>
              <li>Mid-Fi Website Screens in Figma</li>
              <li>Desktop & Mobile website version</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- download -->

  <section id="">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="box-download">
            <h2 class="text-light fw-medium text-center p-5">
              Download the instructions
            </h2>
            <div class="download-btn">
              <a href="">
                <div class="d-flex justify-content-center download-document gap-3 mt-4">
                  <img src="./Assets/img/pdf.png" alt />
                  <h4 style="color: #ffbc05" class="fw-bold">Download Now</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Who is this Bootcamp for -->
  <section id="">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Who is this <span style="color: #ffbc05">Bootcamp for?</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <div class="container bootcamp-con pt-5">
      <div class="row">
        <div class="col-lg-4 text-center bootcamp-con1">
          <img src="Assets/img/round1.png" alt="" />
          <div class="bootcamp-div">
            <h2>looking to upskill</h2>
            <p>
              If you're already working in a design-related field, a bootcamp
              can help you add UX/UI design to your skillset and make yourself
              more competitive in the job market.
            </p>
          </div>
        </div>
        <div class="col-lg-4 text-center bootcamp-con1">
          <img src="Assets/img/round2.png" alt="" />
          <div class="bootcamp-div">
            <h2>Career changers</h2>
            <p>
              If you're looking to transition into the field of UX/UI design,
              a bootcamp can provide you with the necessary skills and
              portfolio to get started.
            </p>
          </div>
        </div>
        <div class="col-lg-4 text-center bootcamp-con1">
          <img src="Assets/img/round3.png" alt="" />
          <div class="bootcamp-div">
            <h2>Recent graduates</h2>
            <p>
              Even with a design degree, a bootcamp can help you focus
              specifically on UX/UI and gain exposure to the latest tools and
              methodologies.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Meet Your Mentor -->
  <section id="">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Meet Your <span style="color: #ffbc05">Mentor</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="d-flex justify-content-center mentor">
        <div class="mentor text-center">
          <img src="./Assets/img/mentor.png" alt />
        </div>
        <div>
          <div class="mentor-card mt-5">
            <p class="text-light p-3 fw-lighter">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem Ipsum is simply dummy
              text of the printing and typesetting industry.
            </p>
          </div>
          <div class="text-center">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
              class="hero-btn btn-aline">Register Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- inside bootcamp -->
  <section id="">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Inside <span style="color: #ffbc05">Bootcamp</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <!-- inside bootcamp -->
    <div class="container pin-card">
      <div class="row mt-5">
        <div class="col text-center">
          <img src="./Assets/img/inside-one.png" alt />
        </div>
        <div class="col text-center">
          <img src="./Assets/img/inside-two.png" alt />
        </div>
        <div class="col text-center">
          <img src="./Assets/img/inside-three.png" alt />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <img src="./Assets/img/inside-four.png" alt />
        </div>
        <div class="col text-center">
          <img src="./Assets/img/inside-five.png" alt />
        </div>
        <div class="col text-center">
          <img src="./Assets/img/inside-six.png" alt />
        </div>
      </div>
    </div>
  </section>

  <!-- meet uour mentors -->
  <section id="">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Meet Our <span style="color: #ffbc05">Techies</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <div class="container pt-3">
      <div class="slider">
        <div class="slide">
          <div class="mentors-cards">Slide 1 Content</div>
        </div>
        <div class="slide">
          <div class="mentors-cards">Slide 2 Content</div>
        </div>
        <div class="slide">
          <div class="mentors-cards">Slide 3 Content</div>
        </div>
        <div class="slide">
          <div class="mentors-cards">Slide 4 Content</div>
        </div>
        <div class="slide">
          <div class="mentors-cards">Slide 5 Content</div>
        </div>
        <div class="slide">
          <div class="mentors-cards">Slide 6 Content</div>
        </div>
      </div>
      <!-- <button class="prev" onclick="prevSlide()">Previous</button>
        <button class="next" onclick="nextSlide()">Next</button> -->
    </div>
  </section>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll(".slide");
    const numSlides = slides.length;
    const numVisibleSlides = 3; // Number of slides visible at a time

    function showSlide(n) {
      slides.forEach((slide, index) => {
        if (index >= n && index < n + numVisibleSlides) {
          slide.style.display = "block";
        } else {
          slide.style.display = "none";
        }
      });
    }

    function prevSlide() {
      currentSlide =
        (currentSlide - numVisibleSlides + numSlides) % numSlides;
      showSlide(currentSlide);
    }

    function nextSlide() {
      currentSlide = (currentSlide + numVisibleSlides) % numSlides;
      showSlide(currentSlide);
    }

    showSlide(currentSlide);
  </script>

  <!-- takeaway -->
  <section id="desktop-version">
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Takeaway<span style="color: #ffbc05"></span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <div class="container roadmap">
      <div class="row">
        <svg id="car" width="914" height="1296" viewBox="0 0 914 1296" fill="none" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <g filter="url(#filter0_dd_1254_120)">
            <path id="hairpinPath"
              d="M134.101 50.3828C473.829 73.6099 1079.77 172.516 756.637 266.701C389.088 360.885 -189.724 469.848 158.222 571.843C593.154 699.336 1046.85 706.611 778.46 826.447C418.186 958.535 -176.248 1061.14 158.222 1122.4C492.691 1183.66 720.52 1227.82 792.626 1242.24"
              stroke="black" stroke-width="93" />
          </g>
          <path
            d="M134.504 50C474.232 73.227 1080.18 172.133 757.04 266.318C389.491 360.502 -189.322 469.465 158.625 571.46C593.557 698.953 1047.25 706.228 778.863 826.064C418.589 958.152 -175.845 1060.76 158.625 1122.02C493.094 1183.28 720.923 1227.43 793.029 1241.85"
            stroke="white" stroke-dasharray="50 50" />
          <rect id="myCircle" x="246.556" y="38.3584" width="49.9359" height="97.2001"
            transform="rotate(95.525 246.556 38.3584)" fill="url(#pattern0_1254_120)" />
          <defs>
            <filter id="filter0_dd_1254_120" x="0.499023" y="-0.00878906" width="912.885" height="1295.84"
              filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha" />
              <feOffset dy="4" />
              <feGaussianBlur stdDeviation="2" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.737255 0 0 0 0 0.0196078 0 0 0 1 0" />
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1254_120" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha" />
              <feOffset dx="4" />
              <feGaussianBlur stdDeviation="2" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.737255 0 0 0 0 0.0196078 0 0 0 1 0" />
              <feBlend mode="normal" in2="effect1_dropShadow_1254_120" result="effect2_dropShadow_1254_120" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_1254_120" result="shape" />
            </filter>
            <pattern id="pattern0_1254_120" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0_1254_120" transform="matrix(0.00306915 0 0 0.00151996 -1.07733 -0.190476)" />
            </pattern>
            <image id="image0_1254_120" width="984" height="990"
              xlink:href="data:image/png;base64,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9FMvnPvGXvwgAI4+gQ3AgRuOdE82Rrknh/F92yPeaaT7Pf3isbvKuD+F91wZj7cj5vcqvnciBfY7/+9fPogffWh95s27mvGfWx3R9SmF9CUj0wDsVsctBsBBO//182koMp1uOibwcMfyqeF67tnhl2ca67u3PGTYuaK8eq5dfjEivjjq79Oo93zEfB3g6Wtp9DsGP2But2u9OXQ+17hAdTA/PXysfcNoNAA5CWwADrXzXz+/kmYADy/jTQHeNBwJb26stjG+JzeOiv96u//FYbg3/90vjvr+aZO1+vPZiPm0/rv593WYN42K9O6VK3Hxj/7YA297nxtxjkvDQG5qjjRfsskYAAfFFHEA2EZjFD2nte/54V7rbXNlnLzV730iiuVORL/5tU7EqZky3n6r37OIKCcjVod/HBW1t8voMQBjR2ADAABABi03IgAAANw+gQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAADA7YqI/x8b+1xnv1qU6wAAAABJRU5ErkJggg==" />
          </defs>
        </svg>

        <div class="col-lg-6 text-start roadmap1">
          <h2>Day 1 : <span>UX Flow</span></h2>
          <img src="Assets/img/ux-flow.png" alt="" />
        </div>
        <div class="col-lg-6 text-end roadmap2">
          <h2>Day 2 : <span>Paper Sketch</span></h2>
          <img src="Assets/img/paper-sketch.png" alt="" />
        </div>
        <div class="col-lg-6 text-start roadmap3">
          <h2>Day 3 : <span>Design UI</span></h2>
          <img src="Assets/img/ui-design.png" alt="" />
        </div>
        <div class="col-lg-6 text-end roadmap4">
          <h2>Day 4 : <span>Website</span></h2>
          <img src="Assets/img/websit.png" alt="" />
        </div>
        <div class="col-lg-6 text-start roadmap5">
          <h2>Day 5 : <span>Prototyping</span></h2>
          <img src="Assets/img/prototyping.png" alt="" />
        </div>
        <div class="col-lg-6 text-end roadmap6">
          <h2>Day 5 : <span>Certificate</span></h2>
          <img src="Assets/img/certificate.png" alt="" />
        </div>
      </div>

      <div class="container pt-5">
        <div style="justify-content: center" class="row">
          <div class="get-certificate">
            <h2>How will you get your Certificate?</h2>
            <ul>
              <li><span>Submit your </span> 5 day tasks.</li>
              <li><span>Submit your </span> Website prototype link.</li>
            </ul>
            <div class="row">
              <div class="col-lg-6">
                <img class="batch" src="Assets/img/batch.png" alt="" />
              </div>
              <div class="col-lg-6 text-end">
                <img class="think" src="Assets/img/certificate-image.png" alt="" />
              </div>
            </div>
          </div>
          <div class="certificate-btn">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
              class="hero-btn">Register Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-version">
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Takeaway<span style="color: #ffbc05"></span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <div class="container roadmap">
      <div class="row">
        <svg id="car1" width="80" height="1435" viewBox="0 0 80 1435" fill="none" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <g filter="url(#filter0_ddd_1296_1678)">
            <path id="hairpinPath1" d="M40 6V1421" stroke="black" stroke-width="59" />
          </g>
          <path d="M42 6V1421" stroke="white" stroke-dasharray="30 30" />
          <rect id="myCircle1" x="62" y="85" width="43" height="83" transform="rotate(180 62 85)"
            fill="url(#pattern0_1296_1678)" />
          <defs>
            <filter id="filter0_ddd_1296_1678" x="0.5" y="0" width="79" height="1435" filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha" />
              <feOffset dx="2" dy="2" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.737255 0 0 0 0 0.0196078 0 0 0 0.5 0" />
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1296_1678" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha" />
              <feOffset dx="-2" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.737255 0 0 0 0 0.0196078 0 0 0 0.5 0" />
              <feBlend mode="normal" in2="effect1_dropShadow_1296_1678" result="effect2_dropShadow_1296_1678" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                result="hardAlpha" />
              <feOffset dy="4" />
              <feGaussianBlur stdDeviation="5" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.737255 0 0 0 0 0.0196078 0 0 0 0.5 0" />
              <feBlend mode="normal" in2="effect2_dropShadow_1296_1678" result="effect3_dropShadow_1296_1678" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect3_dropShadow_1296_1678" result="shape" />
            </filter>
            <pattern id="pattern0_1296_1678" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0_1296_1678" transform="matrix(0.00306915 0 0 0.00151996 -1.07733 -0.190476)" />
            </pattern>
            <image id="image0_1296_1678" width="984" height="990"
              xlink:href="data:image/png;base64,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9FMvnPvGXvwgAI4+gQ3AgRuOdE82Rrknh/F92yPeaaT7Pf3isbvKuD+F91wZj7cj5vcqvnciBfY7/+9fPogffWh95s27mvGfWx3R9SmF9CUj0wDsVsctBsBBO//182koMp1uOibwcMfyqeF67tnhl2ca67u3PGTYuaK8eq5dfjEivjjq79Oo93zEfB3g6Wtp9DsGP2But2u9OXQ+17hAdTA/PXysfcNoNAA5CWwADrXzXz+/kmYADy/jTQHeNBwJb26stjG+JzeOiv96u//FYbg3/90vjvr+aZO1+vPZiPm0/rv593WYN42K9O6VK3Hxj/7YA297nxtxjkvDQG5qjjRfsskYAAfFFHEA2EZjFD2nte/54V7rbXNlnLzV730iiuVORL/5tU7EqZky3n6r37OIKCcjVod/HBW1t8voMQBjR2ADAABABi03IgAAANw+gQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAABABgIbAAAAMhDYAAAAkIHABgAAgAwENgAAAGQgsAEAACADgQ0AAAAZCGwAAADIQGADAADA7YqI/x8b+1xnv1qU6wAAAABJRU5ErkJggg==" />
          </defs>
        </svg>

        <div class="col-lg-6 text-end map1">
          <h2>Day 1 : <br /><span>UX Flow</span></h2>
          <img src="Assets/img/ux-flow.png" alt="" />
        </div>
        <div class="col-lg-6 text-start map2">
          <h2>Day 2 : <br /><span>Paper Sketch</span></h2>
          <img src="Assets/img/paper-sketch.png" alt="" />
        </div>
        <div class="col-lg-6 text-end map3">
          <h2>Day 3 : <br /><span>Design UI</span></h2>
          <img src="Assets/img/ui-design.png" alt="" />
        </div>
        <div class="col-lg-6 text-start map4">
          <h2>Day 4 : <br /><span>Website</span></h2>
          <img src="Assets/img/websit.png" alt="" />
        </div>
        <div class="col-lg-6 text-end map5">
          <h2>Day 5 : <br /><span>Prototyping</span></h2>
          <img src="Assets/img/prototyping.png" alt="" />
        </div>
        <div class="col-lg-6 text-center map6">
          <h2><span>Certificate</span></h2>
          <img src="Assets/img/certificate.png" alt="" />
        </div>
      </div>

      <div class="container pt-5">
        <div style="justify-content: center" class="row">
          <div class="get-certificate">
            <h2>How will you get your Certificate?</h2>
            <ul>
              <li><span>Submit your </span> 5 day tasks.</li>
              <li><span>Submit your </span> Website prototype link.</li>
            </ul>
            <div class="row">
              <div class="col-lg-6">
                <img class="batch" src="Assets/img/batch.png" alt="" />
              </div>
              <div class="col-lg-6 text-end">
                <img class="think" src="Assets/img/certificate-image.png" alt="" />
              </div>
            </div>
          </div>
          <div class="certificate-btn">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openenquiry()"
              class="hero-btn">Register Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      gsap.registerPlugin(MotionPathPlugin, ScrollTrigger);

      gsap.to("#myCircle", {
        scrollTrigger: {
          trigger: "#hairpinPath",
          start: "top 60%", // Adjusted to move the image a little forward
          end: "bottom 0%",
          scrub: 1,
          markers: false,
        },
        duration: 1,
        motionPath: {
          path: "#hairpinPath",
          align: "#hairpinPath",
          autoRotate: false,
          alignOrigin: [0.5, 0.5],
        },
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      gsap.registerPlugin(MotionPathPlugin, ScrollTrigger);

      gsap.to("#myCircle1", {
        scrollTrigger: {
          trigger: "#hairpinPath1",
          start: "top 40%", // Adjusted to move the image a little forward
          end: "bottom 0%",
          scrub: 1,
          markers: false,
        },
        duration: 1,
        motionPath: {
          path: "#hairpinPath1",
          align: "#hairpinPath1",
          autoRotate: false,
          alignOrigin: [0.5, 0.5],
        },
      });
    });
  </script>

  <!-- Bouns -->

  <section class="pt-5" id="desktop-version">
    <div class="container">
      <div class="row">
        <div class="col">
          <div>
            <div class="div bonus text-center">
              <img src="./Assets/img/bonus.png" alt />
            </div>

            <div class="margin-text">
              <h1 class="text-aline">
                Best Performer
                <span style="color: white">
                  will get Amazon Voucher worth of</span>
                1000rs
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="voucher" id="mobile-version">
    <img src="Assets/img/voucher.png" alt="" />
  </section>

  <!-- confused-bootcamp -->

  <section id="">
    <div class="container aline-auto">
      <div class="row">
        <div class="col">
          <div class="bootcamp-box">
            <h1 class="text-light">
              Are you Confused about
              <span style="color: #ffbc05">Bootcamp?</span>
            </h1>
            <div class="d-flex">
              <div class="text-div">
                <p class="text-light fw-lighter">
                  (This Bootcamp will give you Insights) <br />
                  <span style="font-weight: 600">to Decide</span>
                </p>
                <button class="hero-btn mt-5">
                  <img src="Assets/img/call.png" alt="" />Call Us Back</button><button class="down-btn mt-5">
                  <img src="./Assets/img/pdf.png" alt="" /> Download Now
                </button>
              </div>
              <div class="mt-2 confused">
                <img src="./Assets/img/bootcamp-object.png" alt />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- tetimonial -->
  <section id="">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Testimonial<span style="color: #ffbc05"></span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="testimonial">
            <div class="carousel">
              <div class="carousel__item carousel__item--left">
                <div class="testimonial-cards"></div>
              </div>
              <div class="carousel__item carousel__item--main">
                <div class="testimonial-cards"></div>
              </div>
              <div class="carousel__item carousel__item--right">
                <div class="testimonial-cards"></div>
              </div>

              <div class="carousel__btns">
                <button class="carousel__btn" id="leftBtn">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="m15 4l2 2l-6 6l6 6l-2 2l-8-8z" />
                  </svg>
                </button>
                <button class="carousel__btn" id="rightBtn">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="m9.005 4l8 8l-8 8L7 18l6.005-6L7 6z" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- accordian -->

  <section id="faq">
    <!-- heading- modules -->
    <div class="container box-aligng">
      <div class="row">
        <div class="col text-center">
          <div class="d-flex justify-content-center">
            <img src="./Assets/img/head-yellow.png" alt />
            <h1 class="text-light mt-4 fw-bold">
              Please get in <span style="color: #ffbc05">touch with us</span>
            </h1>
            <img src="./Assets/img/head-white.png" alt />
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-3">
      <div class="row">
        <div class="col">
          <div class="accordion">
            <div class="accordion-item">
              <button class="accordion-header">
                Bleak - Personal Portfolio Template
                <span class="icon">+</span>
              </button>
              <div class="accordion-content">
                <p class="text-light">
                  You can get all the details related to the timings and dates
                  of the bootcamp on the top of the page.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-header">
                Is this a live session?
                <span class="icon">+</span>
              </button>
              <div class="accordion-content">
                <p class="text-light">
                  You can get all the details related to the timings and dates
                  of the bootcamp on the top of the page.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-header">
                Can I record the session for personal use later?
                <span class="icon">+</span>
              </button>
              <div class="accordion-content">
                <p class="text-light">
                  You can get all the details related to the timings and dates
                  of the bootcamp on the top of the page.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-header">
                Is this a live session?
                <span class="icon">+</span>
              </button>
              <div class="accordion-content">
                <p class="text-light">
                  You can get all the details related to the timings and dates
                  of the bootcamp on the top of the page.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <section id="">
    <div class="bg-footer">
      <div class="container">
        <div class="row p-5 footer" style="align-items: baseline">
          <div class="col desktop-version"></div>
          <div class="col">
            <div>
              <img class="logo" src="./Assets/img/logo.png" alt />
            </div>
          </div>
          <div class="col">
            <div class="follow">
              <h3 class="text-light">FOLLOW US ON:</h3>
              <div class="d-flex gap-4 mt-3">
                <a href=""><i class="bi bi-instagram text-light"></i></a>
                <a href=""><i class="bi bi-facebook text-light"></i></a>
                <a href=""><i class="bi bi-linkedin text-light"></i></a>
                <a href=""><i class="bi bi-youtube text-light"></i></a>
              </div>
            </div>
          </div>
          <div class="col desktop-version"></div>
        </div>
        <hr class="text-light" />
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-around">
                <div class="text-light opacity-50">
                  <p>
                    Copyright © 2024
                    <span style="color: #ffbc05"> School Of Techies </span>
                    All Rights Reserved.
                  </p>
                </div>

                <div class="text-light d-flex gap-4 opacity-50">
                  <p>Terms & Condition</p>
                  <p>Privacy Policy</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- register form -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title sub-title" id="exampleModalLabel">Register Now!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="register-now" method="POST" action="form.php">
            <div class="row">
              <div class="col-lg-12 d-none">
                <input type="text" class="form-control style-white" name="hidden-input" id="hidden-input"
                  placeholder="Your Name*" />
              </div>
              <div class="col-lg-12">
                <input class="form-group" required type="text" placeholder="Enter Your Name" name="name" id="">
              </div>
              <div class="col-lg-12">
                <input class="form-group" required type="email" placeholder="Enter Your Email" name="email" id="">
              </div>
              <div class="col-lg-12">
                <input class="form-group" required type="tel" placeholder="Phone Number" name="number" id="">
              </div>
              <div class="col-lg-12">
                <input class="form-group" type="tel" placeholder="Emergency Number" name="emer" id="">
              </div>
            </div>
            <div class="form-btn col-lg-12 mt-10">
              <button style="width:100%;" type="submit" class="th-btn" disabled id="contact-what"
                onclick="submitFormWithRecaptcha1()">
                <span id="button-text">Pay Now!</span>
                <span id="loader" style="display:none;">Please Wait <i class="bi bi-arrow-clockwise spinner"></i></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function checkForm() {
      var form = document.getElementById('register-now');
      var inputs = form.querySelectorAll('input[required], select[required]');
      var button = form.querySelector('button[type="submit"]');
      var isValid = true;

      inputs.forEach(function (input) {
        if (!input.value.trim()) {
          isValid = false;
        }
      });

      button.disabled = !isValid;
      button.style.opacity = isValid ? "1" : "0.6";
    }

    // Call checkForm when inputs change
    var formInputs = document.querySelectorAll('input[required], select[required]');
    formInputs.forEach(function (input) {
      input.addEventListener('input', checkForm);
    });

    // Initial check when the page loads
    window.addEventListener('load', checkForm);

    function submitFormWithRecaptcha1() {
      var button = document.getElementById('contact-what');
      var buttonText = document.getElementById('button-text');
      var loader = document.getElementById('loader');

      // Show loader and change button text
      buttonText.style.display = 'none';
      loader.style.display = 'inline-block';
      button.style.opacity = "0.8";
      

      // Hide the form after 3 seconds
      setTimeout(function () {
        document.getElementById("customModal").style.display = "none";
        button.disabled = true;
        button.innerHTML = "Please wait...";
        document.getElementById("popupform-bg").style.backgroundColor = "transparent";
      }, 5000);
    }

  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/MotionPathPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>

  <!-- countdown -->

  <script>
    document.addEventListener("scroll", function () {
      const secondSection = document.getElementById("second-section");
      const backgroundFab = document.querySelector(".background-fab");

      const secondSectionTop = secondSection.getBoundingClientRect().top;

      if (secondSectionTop <= 0) {
        backgroundFab.classList.add("visible");
      } else {
        backgroundFab.classList.remove("visible");
      }
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const carousel = document.getElementById("carousel");
      let startY, endY;

      function handleTouchStart(event) {
        startY = event.touches[0].clientY;
      }

      function handleTouchMove(event) {
        endY = event.touches[0].clientY;
      }

      function handleTouchEnd() {
        const itemHeight = carousel.clientHeight;
        if (startY > endY) {
          scrollToNext();
        } else if (startY < endY) {
          scrollToPrev();
        }
      }

      function scrollToPrev() {
        if (carousel.scrollTop > 0) {
          carousel.scrollTo({
            top: carousel.scrollTop - itemHeight,
            behavior: "smooth",
          });
        }
      }

      function scrollToNext() {
        if (
          carousel.scrollTop <
          carousel.scrollHeight - carousel.clientHeight
        ) {
          carousel.scrollTo({
            top: carousel.scrollTop + itemHeight,
            behavior: "smooth",
          });
        }
      }

      let isScrolling;
      carousel.addEventListener("scroll", function () {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(function () {
          const itemHeight = carousel.clientHeight;
          const scrollPosition = carousel.scrollTop;
          const nearestIndex = Math.round(scrollPosition / itemHeight);
          carousel.scrollTo({
            top: nearestIndex * itemHeight,
            behavior: "smooth",
          });
        }, 66); // Debounce timeout for scroll event
      });

      carousel.addEventListener("touchstart", handleTouchStart);
      carousel.addEventListener("touchmove", handleTouchMove);
      carousel.addEventListener("touchend", handleTouchEnd);
    });
  </script>
  <script>
    var countdown = document.querySelector(".countdown");

    var x = setInterval(function () {
      var launchDate = new Date("June 10, 2024 10:00:00").getTime();

      var now = new Date().getTime();

      var distance = launchDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      countdown.innerHTML = `
<div>${days}<span>Days</span></div> 
<div>${hours}<span>Hours</span></div>
<div>${mins}<span>Minutes</span></div>
<div>${seconds}<span>Seconds</span></div>
`;

      if (distance < 0) {
        clearInterval(intvl);

        countdown.style.color = "#17a2b8";
        countdown.innerHTML = "Launched!";
      }
    }, 1000);
  </script>
  <script>
    // script.js
    document.querySelectorAll(".accordion-header").forEach((button) => {
      button.addEventListener("click", () => {
        const accordionContent = button.nextElementSibling;
        const icon = button.querySelector(".icon");

        button.classList.toggle("active");

        if (button.classList.contains("active")) {
          accordionContent.style.maxHeight =
            accordionContent.scrollHeight + "px";
          icon.textContent = "-";
        } else {
          accordionContent.style.maxHeight = 0;
          icon.textContent = "+";
        }
      });
    });
  </script>

  <!-- testimonial -->
  <script>
    "use strict";

    const carouselItems = document.querySelectorAll(".carousel__item");
    console.log(carouselItems);
    let currentItem = document.querySelector(".carousel__item--main");
    const leftBtn = document.querySelector("#leftBtn");
    const rightBtn = document.querySelector("#rightBtn");

    rightBtn.addEventListener("click", function () {
      currentItem = document.querySelector(".carousel__item--right");
      const leftItem = document.querySelector(".carousel__item--main");
      carouselItems.forEach((item, i) => {
        item.classList = "carousel__item";
      });
      currentItem.classList.add("carousel__item--main");
      leftItem.classList.add("carousel__item--left");
      const currentId = Array.from(carouselItems).indexOf(currentItem);
      const rightItem =
        currentId === carouselItems.length - 1
          ? carouselItems[0]
          : carouselItems[currentId + 1];
      rightItem.classList.add("carousel__item--right");
    });

    leftBtn.addEventListener("click", function () {
      currentItem = document.querySelector(".carousel__item--left");
      const rightItem = document.querySelector(".carousel__item--main");
      carouselItems.forEach((item, i) => {
        item.classList = "carousel__item";
      });
      currentItem.classList.add("carousel__item--main");
      rightItem.classList.add("carousel__item--right");
      const currentId = Array.from(carouselItems).indexOf(currentItem);
      const leftItem =
        currentId === 0
          ? carouselItems[carouselItems.length - 1]
          : carouselItems[currentId - 1];
      leftItem.classList.add("carousel__item--left");
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>