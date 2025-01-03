<?php
// Sertakan file koneksi database
include 'database/EvenBase.php';

// Periksa apakah form telah dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $description = $_POST['description'] ?? '';
    $name = $_POST['eventname'] ?? '';
    $organizer = $_POST['organizer'] ?? '';
    $event_type = $_POST['event_type'] ?? '';
    $quota = $_POST['quota'] ?? null;
    $price = $_POST['price'] ?? '0';
    $duration = $_POST['duration'] ?? '';
    $place = $_POST['place'] ?? '';
    $link = $_POST['link'] ?? '';

    // Proses upload file KTP
    $ktp = $_FILES['ktp']['name'] ?? '';
    $ktp_tmp = $_FILES['ktp']['tmp_name'];
    
    // Proses upload file Poster
    $poster = $_FILES['poster']['name'] ?? '';
    $poster_tmp = $_FILES['poster']['tmp_name'];

    // Validasi input (opsional)
    if (empty($name) || empty($description) || empty($organizer) || empty($event_type) || empty($place) || empty($ktp) || empty($poster)) {
        die("Semua kolom yang wajib diisi harus diisi.");
    }

    // Masukkan file ke direktori sementara (hanya contoh, Anda bisa memindahkannya ke lokasi yang lebih aman jika diperlukan)
    $upload_dir = 'uploads/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // move_uploaded_file($ktp_tmp, $upload_dir . $ktp);
    move_uploaded_file($poster_tmp, $upload_dir . $poster);

    // Siapkan query SQL untuk menyimpan data
    $sql = "INSERT INTO event (description, name, organizer, event_type, quota, price, duration, place, ktp, poster, link)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Jalankan query menggunakan prepared statement
    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param(
            'sssssisssss',
            $description,
            $name,
            $organizer,
            $event_type,
            $quota,
            $price,
            $duration,
            $place,
            $ktp,
            $poster,
            $link
        );

        if ($stmt->execute()) {
            echo "<script>
                    alert('Data berhasil disimpan!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "Terjadi kesalahan: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Terjadi kesalahan dalam persiapan query.";
    }

    // Tutup koneksi
    $db->close();
} else {
    echo "Form tidak dikirim dengan benar.";
}
?>