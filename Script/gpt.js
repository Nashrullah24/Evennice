document.addEventListener("DOMContentLoaded", () => {
  // Pilih kategori default (All) di awal
  const defaultCategory = document.querySelector(".category.all");
  if (defaultCategory) {
    defaultCategory.classList.add("visible");
    defaultCategory.classList.remove("hidden");
  }
});

function showCategory(category) {
  // Hentikan scroll otomatis
  event.preventDefault();

  // Sembunyikan semua kategori
  const categories = document.querySelectorAll(".category");
  categories.forEach((cat) => {
    cat.classList.remove("visible");
    cat.classList.add("hidden");
  });

  // Tampilkan kategori yang dipilih
  const selectedCategory = document.querySelector(`.${category}`);
  if (selectedCategory) {
    selectedCategory.classList.remove("hidden");

    // Gunakan transisi agar perubahan lebih halus
    setTimeout(() => {
      selectedCategory.classList.add("visible");
    }, 50); // Tambahkan sedikit jeda untuk memicu transisi
  }
}
