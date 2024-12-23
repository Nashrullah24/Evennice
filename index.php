
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Styesheet/HomePage.css" />
    <title>Home</title>

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body class="body">
    <?php include "layout/header.html"?>

    <!-- section scroll -->
    <?php include 'display_event.php'; ?>

    <!-- section filter -->
    <section class="filter">
      <div class="filter-container">
        <a href="#" class="menu-link" onclick="showCategory('all')">All</a>
        <a href="#" class="menu-link" onclick="showCategory('online')"
          >Online</a
        >
        <a href="#" class="menu-link" onclick="showCategory('offline')"
          >Offline</a
        >
        <a href="#" class="menu-link" onclick="showCategory('today')">Today</a>
      </div>
    </section>

    <!-- section filter/card -->
    <section class="content" id="content">
      <!-- all category -->
      <div class="category all visible">
        <main class="card-container">
          <!-- Card 1 -->
          <div class="card" onclick="navigateToPage('event1.html')">
            <img src="picture/businesstalk.png" alt="Event 1" class="card-image" />
            <div class="card-content">
              <h3>Event 1: Business Talk</h3>
              <p>Tomorrow at 19:00 WIB</p>
              <p>Free | Business Faculty at UIN </p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card" onclick="navigateToPage('event2.html')">
            <img src="picture/cultural.png" alt="Event 2" class="card-image" />
            <div class="card-content">
              <h3>Event 2: Cultural Students</h3>
              <p>Friday at 08:00 WIB</p>
              <p>Free | Hosted by Islamic Cultural</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card" onclick="navigateToPage('event3.html')">
            <img src="picture/ecowork.png" alt="Event 3" class="card-image" />
            <div class="card-content">
              <h3>Event 3: Ecowork</h3>
              <p>Today at 09:00 GMT+7</p>
              <p>Free Event | Hosted by Agribisnis Students Club</p>
            </div>
          </div>

          <!-- Card  -->
          <div class="card" onclick="navigateToPage('event3.html')">
            <img src="picture/international.png" alt="Event 3" class="card-image" />
            <div class="card-content">
              <h3>Event 4: international Seminar</h3>
              <p>Tomorrow at 12:00 WIB</p>
              <p>Free Event | Hosted by Art Society</p>
            </div>
          </div>
        </main>
      </div>

      <!-- online category -->
      <div class="category online hidden">
        <main class="card-container">
          <!-- Card 1 -->
          <div class="card" onclick="navigateToPage('event1.html')">
            <img src="placeholder1.jpg" alt="Event 1" class="card-image" />
            <div class="card-content">
              <h3>Event 1: Culinary Adventure</h3>
              <p>Tomorrow at 19:00 WIB</p>
              <p>From $20.00 | Hosted by Culinary Masters</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card" onclick="navigateToPage('event2.html')">
            <img src="placeholder2.jpg" alt="Event 2" class="card-image" />
            <div class="card-content">
              <h3>Event 2: Online Dental Workshop</h3>
              <p>Today at 21:00 WIB</p>
              <p>From $50.00 | Hosted by Dental Pro</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card" onclick="navigateToPage('event3.html')">
            <img src="placeholder3.jpg" alt="Event 3" class="card-image" />
            <div class="card-content">
              <h3>Event 3: Art Museum Livestream</h3>
              <p>Tomorrow at 18:00 WIB</p>
              <p>Free Event | Hosted by Art Society</p>
            </div>
          </div>
        </main>
      </div>
      <!-- Tambahkan kategori lain sesuai kebutuhan -->

      <!-- offline category -->
      <div class="category offline hidden">
        <main class="card-container">
          <!-- Card 1 -->
          <div class="card" onclick="navigateToPage('event1.html')">
            <img src="placeholder1.jpg" alt="Event 1" class="card-image" />
            <div class="card-content">
              <h3>Event 1: Culinary Adventure</h3>
              <p>Tomorrow at 19:00 GMT+7</p>
              <p>From $20.00 | Hosted by Culinary Masters</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card" onclick="navigateToPage('event2.html')">
            <img src="placeholder2.jpg" alt="Event 2" class="card-image" />
            <div class="card-content">
              <h3>Event 2: Online Dental Workshop</h3>
              <p>Today at 21:00 GMT+7</p>
              <p>From $50.00 | Hosted by Dental Pro</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card" onclick="navigateToPage('event3.html')">
            <img src="placeholder3.jpg" alt="Event 3" class="card-image" />
            <div class="card-content">
              <h3>Event 3: Art Museum Livestream</h3>
              <p>Tomorrow at 18:00 GMT+7</p>
              <p>Free Event | Hosted by Art Society</p>
            </div>
          </div>
        </main>
      </div>

      <!-- today category -->
      <div class="category today hidden">
        <main class="card-container">
          <!-- Card 1 -->
          <div class="card" onclick="navigateToPage('event1.html')">
            <img src="placeholder1.jpg" alt="Event 1" class="card-image" />
            <div class="card-content">
              <h3>Event 1: Culinary Adventure</h3>
              <p>Tomorrow at 19:00 GMT+7</p>
              <p>From $20.00 | Hosted by Culinary Masters</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card" onclick="navigateToPage('event2.html')">
            <img src="placeholder2.jpg" alt="Event 2" class="card-image" />
            <div class="card-content">
              <h3>Event 2: Online Dental Workshop</h3>
              <p>Today at 21:00 GMT+7</p>
              <p>From $50.00 | Hosted by Dental Pro</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card" onclick="navigateToPage('event3.html')">
            <img src="placeholder3.jpg" alt="Event 3" class="card-image" />
            <div class="card-content">
              <h3>Event 3: Art Museum Livestream</h3>
              <p>Tomorrow at 18:00 GMT+7</p>
              <p>Free Event | Hosted by Art Society</p>
            </div>
          </div>
        </main>
      </div>
    </section>
    <section class="event-by-category">
      <div class="sains"></div>
    </section>

    <!-- hot events -->
    <section class="container-hotevens">
      <!-- Section 1 -->
      <h2>Sains & Technology Event</h2>
      <div class="card-wrapper-hot">
        <a href="page1.html" class="card">
          <img src="uploaded_image.png" alt="Event Image" />
          <div class="card-content-hot">
            <h3>GDGDC ITS</h3>
            <p>Saturday 07:00</p>
            <p>Teater Lantai 4, UIN</p>
          </div>
        </a>
        <a href="page2.html" class="card">
          <img src="uploaded_image.png" alt="Event Image" />
          <div class="card-content-hot">
            <h3>GDGDC ITS</h3>
            <p>Saturday 07:00</p>
            <p>Teater Lantai 4, UIN</p>
          </div>
        </a>
      </div>

      <!-- Section 2 -->
      <h2>Training in UIN Syarif Hidayatullah</h2>
      <div class="card-wrapper-hot">
        <a href="page3.html" class="card">
          <img src="uploaded_image.png" alt="Event Image" />
          <div class="card-content-hot">
            <h3>GDGDC ITS</h3>
            <p>Saturday 07:00</p>
            <p>Teater Lantai 4, UIN</p>
          </div>
        </a>
        <a href="page4.html" class="card">
          <img src="uploaded_image.png" alt="Event Image" />
          <div class="card-content-hot">
            <h3>GDGDC ITS</h3>
            <p>Saturday 07:00</p>
            <p>Teater Lantai 4, UIN</p>
          </div>
        </a>
      </div>

      <!-- Section 3 -->
      <h2>Business Event</h2>
      <div class="card-wrapper-hot">
        <a href="page5.html" class="card">
          <img src="uploaded_image.png" alt="Event Image" />
          <div class="card-content-hot">
            <h3>GDGDC ITS</h3>
            <p>Saturday 07:00</p>
            <p>Teater Lantai 4, UIN</p>
          </div>
        </a>
        <a href="page6.html" class="card">
          <img src="uploaded_image.png" alt="Event Image" />
          <div class="card-content-hot">
            <h3>GDGDC ITS</h3>
            <p>Saturday 07:00</p>
            <p>Teater Lantai 4, UIN</p>
          </div>
        </a>
      </div>
    </section>

    <script src="Script/gpt.js"></script>
    <!-- <script src="Script/HomePage.js"></script> -->
    <script>
      feather.replace();
    </script>
    <?php include "layout/footer.html" ?>

  </body>
</html>
