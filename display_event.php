<?php
// Sertakan file koneksi database
include 'database/evenbase.php';

// Query untuk mengambil data event, termasuk id, poster, dan nama (untuk alt text yang lebih baik)
$query = "SELECT id, poster, name FROM event"; // Pilih kolom yang dibutuhkan saja
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    die("Query failed: " . mysqli_error($db));
}

// Periksa apakah ada data event yang ditemukan
if (mysqli_num_rows($result) > 0) {
    echo '<section class="hero-section">';
    echo '<div class="scroll-container">';
    echo '<div class="scroll-content">';

    // Loop untuk setiap data event
    while ($row = mysqli_fetch_assoc($result)) {
        $poster = $row['poster'];
        $event_id = $row['id'];
        $event_name = $row['name']; // Ambil nama event untuk alt text

        echo '<div class="card">';
        echo '<a href="event_detail.php?id=' . $event_id . '">';
        if (!empty($poster)) {
            echo '<img src="Picture/' . $poster . '" alt="' . $event_name . '" width="255px">'; // Gunakan nama event di alt text
        } else {
            echo '<img src="picture/placeholder.png" alt="No Poster Available" width="255px">';
        }
        echo '</a>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';
} else {
    echo "<p>Tidak ada event yang ditemukan.</p>";
}

// Tutup koneksi database
mysqli_close($db);
?>