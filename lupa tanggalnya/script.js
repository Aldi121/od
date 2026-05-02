// ================================
// Daftar gambar yang akan ditampilkan
// Kamu bisa ganti link dengan gambar sendiri
// ================================
const images = [
    "paham.jpeg",
    "ulangi.jpeg",
    "amboi.jpeg",
    "hmmm.jpg",
];

// Menyimpan posisi gambar yang sedang ditampilkan
let index = 0;

// ================================
// Ambil elemen HTML berdasarkan ID
// ================================
const displayImage = document.getElementById("displayImage");
const output = document.getElementById("selectedOutput");

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const selectBtn = document.getElementById("selectBtn");

// ================================
// Fungsi untuk menampilkan gambar sesuai index
// ================================
function updateImage() {
    displayImage.src = images[index];   // Ganti sumber gambar
}

// ================================
// Event tombol NEXT → geser ke kanan
// ================================
nextBtn.addEventListener("click", () => {
    if (index < images.length - 1) {  // Cek agar tidak melewati akhir list
        index++;
        updateImage();
    }
});

// ================================
// Event tombol PREVIOUS → geser ke kiri
// ================================
prevBtn.addEventListener("click", () => {
    if (index > 0) {  // Cek agar tidak negatif
        index--;
        updateImage();
    }
});

// ================================
// Event tombol PILIH GAMBAR
// Menampilkan gambar mana yang dipilih user
// ================================
selectBtn.addEventListener("click", () => {
    output.textContent = "Gambar dipilih: " + images[index];
});

// ================================
// Tampilkan gambar pertama saat halaman dibuka
// ================================
updateImage();
