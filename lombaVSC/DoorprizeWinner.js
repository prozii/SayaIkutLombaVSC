var up = document.getElementById('Jumlah');
var down = document.getElementById('HasilAcak');

var arr = [up];

up.innerHTML = "Masukkan Jumlah Peserta"

function Acak() {
    down.innerHTML = arr[Math.floor(random(1, up)) -1];
}