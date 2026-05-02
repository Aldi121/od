function hitungHarga() {
    const a = parseFloat(document.getElementById('angka1').value);
    const b = parseFloat(document.getElementById('angka2').value);

    if (!isNaN(a) && !isNaN(b)) {
        const total = a * b;
        document.getElementById('hasil').textContent = total;
    } else {
        alert("Masukkan harga dan jumlah dengan benar!");
    }
}

document.getElementById('btn-hitung').addEventListener('click', hitungHarga);