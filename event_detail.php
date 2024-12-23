<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'database/evenbase.php';

// Periksa apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    // Query database berdasarkan ID
    $query = "SELECT * FROM event WHERE id = " . $event_id;
    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Sekarang $row berisi data event yang sesuai dengan ID
    } else {
        echo "Event tidak ditemukan.";
        exit;
    }
} else {
    echo "ID event tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['name']; ?> - Open Tech Summit 2024</title>
    <link rel="stylesheet" href="styesheet/event_detail.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="body">
    <main>
        <section class="banner">
            <img src="picture/<?php echo $row['poster']; ?>" alt="<?php echo $row['name']; ?> Poster" class="banner-poster">
        </section>

        <section class="event-details">
            <h2><?php echo $row['name']; ?></h2>
            <p><strong><?php echo $row['purpose']; ?></strong></p>
        </section>

        <section class="organizer">
            <h3>Organized By:</h3>
            <div class="organizer-details">
                <p><strong><?php echo $row['organizer']; ?></strong></p>
            </div>
        </section>

        <section class="schedule">
            <h3>Date and Time:</h3>
            <p><?php echo $row['date']; ?></p>
            <h3>Location:</h3>
            <p><?php echo $row['place']; ?></p>
        </section>

        </main>

    <script>feather.replace();</script>
</body>
</html>