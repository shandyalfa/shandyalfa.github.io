document.querySelector('.nav a[href="pengumuman.html"]').onclick = function(event) {
    event.preventDefault(); // Mencegah navigasi ke halaman
    document.getElementById('popup').style.display = 'block'; // Tampilkan pop-up
}
document.querySelector('.nav a[href="pendaftaran.html"]').onclick = function(event) {
    event.preventDefault(); // Mencegah navigasi ke halaman
    document.getElementById('popup').style.display = 'block'; // Tampilkan pop-up
}
document.getElementById('closePopup').onclick = function() {
    document.getElementById('popup').style.display = 'none'; // Menutup pop-up
}
window.onclick = function(event) {
    if (event.target == document.getElementById('popup')) {
        document.getElementById('popup').style.display = 'none'; // Menutup pop-up
    }
}