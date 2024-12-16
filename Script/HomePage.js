function filterItems() {
  const input = document.getElementById("search-input").value.toLowerCase();
  const items = document.querySelectorAll("#search-results li");
  const resultsContainer = document.getElementById("search-results");

  let hasResults = false;

  items.forEach((item) => {
    if (item.textContent.toLowerCase().includes(input)) {
      item.style.display = "block";
      hasResults = true;
    } else {
      item.style.display = "none";
    }
  });

  if (input && hasResults) {
    resultsContainer.style.display = "block";
  } else {
    resultsContainer.style.display = "none";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const uploadedImage = localStorage.getItem("uploadedImage");
  if (uploadedImage) {
    const images = document.querySelectorAll(".card img");
    images.forEach((img) => {
      img.src = uploadedImage;
    });
  }
});

function uploadImage() {
  const input = document.getElementById("imageInput");
  const file = input.files[0];

  if (file) {
    // Simpan gambar ke localStorage
    const reader = new FileReader();
    reader.onload = function (e) {
      localStorage.setItem("uploadedImage", e.target.result);
      alert("Gambar berhasil diupload!");
    };
    reader.readAsDataURL(file);
  } else {
    alert("Pilih gambar terlebih dahulu.");
  }
}
