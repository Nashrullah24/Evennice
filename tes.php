<?php
// Proses upload gambar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['ktp'])) {
    $uploadDir = 'uploads/'; // Direktori untuk menyimpan file yang diupload
    $uploadFile = $uploadDir . basename($_FILES['ktp']['name']);

    // Periksa apakah direktori upload ada, jika tidak, buat direktori
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Validasi file (opsional, contoh: hanya izinkan gambar JPG, PNG)
    $allowedTypes = ['image/jpeg', 'image/png'];
    if (!in_array($_FILES['ktp']['type'], $allowedTypes)) {
        $error = 'File yang diunggah harus berupa gambar JPG atau PNG.';
    } elseif (move_uploaded_file($_FILES['ktp']['tmp_name'], $uploadFile)) {
        $success = 'Gambar berhasil diunggah.';
    } else {
        $error = 'Gagal mengunggah gambar.';
    }
}

// Ambil gambar terbaru untuk ditampilkan di hero-section
$uploadedImage = isset($uploadFile) && file_exists($uploadFile) ? $uploadFile : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload dan Tampilkan Gambar</title>
    <style>
        .hero-section {
            text-align: center;
            margin: 20px;
        }
        .card {
            display: inline-block;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .card img {
            max-width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="hero-section">
    <h1>Hero Section</h1>
    <div class="card">
        <?php if ($uploadedImage): ?>
            <img src="<?= htmlspecialchars($uploadedImage) ?>" alt="Uploaded Image">
        <?php else: ?>
            <img src="placeholder1.jpg" alt="Default Image">
        <?php endif; ?>
        <h2>Card Title</h2>
        <p>Card description goes here.</p>
    </div>
</div>

<div class="upload-section">
    <h2>Upload Gambar</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php elseif (isset($success)): ?>
        <p style="color: green;"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="ktp">Upload Gambar:</label><br>
        <input type="file" name="ktp" id="ktp" accept="image/*" required><br><br>
        <button type="submit">Upload</button>
    </form>
</div>

</body>
</html>
