
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Evenice Event Form</title>
    <link rel="stylesheet" href="styesheet/CreateEvent.css" />
  </head>
  <body>
    <!-- Header -->
    <header></header>

    <a href="index.php" style="position: sticky;"><img src="picture/Logo.png" width= 150px;></a>

    <!-- Form Section -->
    <section class="form-section">
      <div class="form-container">
        <h2>
          YOU ARE <span class="highlight">READY</span> TO SHARE YOUR EVENT WITH
          US?
        </h2>
        <p class="form-subtitle">Fill Form Below:</p>
        <form action="process_event.php" method="POST" enctype="multipart/form-data">
          <input type="text" placeholder="Name Of Event" name="eventname" />
          <!-- <input type="text" placeholder="Event Purpose" name="purpose" /> -->
          <textarea name="description" id="description" placeholder="Description" rows="4" cols="70"></textarea>
          <input
            type="date"
            placeholder="Event schedule (DD/MM/YYYY)"
            name="date"
            required
          />
          <input type="text" placeholder="Event Organizer" name="organizer" required />

          <div class="radio-section">
            <label>Online/Offline</label><br />
            <input type="radio" id="online" name="event_type" value="online" />
            <label for="online">Online</label>
            <input
              type="radio"
              id="offline"
              name="event_type"
              value="offline"
            />
            <label for="offline">Offline</label>
          </div>

          <input type="number" placeholder="Participant Quota" name="quota" />

          <div class="price-section">
            <label for="price">Price</label>
            <input type="text" id="price" placeholder="Rp." name="price" />
            <input type="checkbox" id="free" name="free" />
            <label for="free">Free</label>
          </div>

          <input type="text" placeholder="Duration" name="duration" />
          <input
            type="text"
            placeholder="Event venue"
            name="place"
            required
          />

          <input type="text" placeholder="Registration Link" name="link" required>

          <div class="file-upload">
            <label for="ktp">Upload KTP</label>
            <input type="file" id="ktp" name="ktp" accept="image/*" required />
          </div>

          <div class="file-upload">
            <label for="poster">Upload Poster</label>
            <input
              type="file"
              id="poster"
              name="poster"
              accept="image/*"
              required
            />
          </div>

          <div class="terms-section">
            <input type="checkbox" id="terms" required />
            <label for="terms"
              >I accept the Evenice Terms of Service and Community Guidelines,
              and have read the Privacy Policy.</label
            >
          </div>

          <button type="submit" class="submit-btn">Create Event</button>
        </form>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
      <h3>What they say about evenice?</h3>
      <div class="testimonial-container">
        <div class="testimonial">
          <p>
            “A very helpful platform to inform the audience of the upcoming
            event”
          </p>
          <div class="logo">LinkedPeople</div>
        </div>
        <div class="testimonial">
          <p>
            “Evenice helps introduce our community to audiences through the
            events we publish here”
          </p>
          <div class="logo">WorldWide Community</div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <nav>
        <a href="#">About</a>
        <a href="#">Find Event</a>
        <a href="index.php">Home</a>
        <a href="#">Our Team</a>
        <a href="#">Today Event</a>
        <a href="#">Training</a>
      </nav>
      <p>Evenice</p>
    </footer>
  </body>
</html>
