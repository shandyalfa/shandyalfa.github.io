// Mendapatkan elemen
const contactButton = document.getElementById('contactButton');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');

// Menampilkan popup saat tombol diklik
contactButton.addEventListener('click', function() {
    popup.style.display = 'flex';
    setTimeout(() => popup.classList.add('show'), 10); // Tambahkan class show setelah sedikit jeda
});

// Menutup popup saat tombol close diklik
closePopup.addEventListener('click', function() {
    popup.classList.remove('show');
    setTimeout(() => popup.style.display = 'none', 300); // Tunggu hingga transisi selesai
});

// Menutup popup saat mengklik di luar konten popup
window.addEventListener('click', function(e) {
    if (e.target === popup) {
        popup.classList.remove('show');
        setTimeout(() => popup.style.display = 'none', 300);
    }
});
     
const menuToggle = document.querySelector('.menu-toggle');
const navUl = document.querySelector('nav ul');

menuToggle.addEventListener('click', () => {
    navUl.classList.toggle('active');
});

