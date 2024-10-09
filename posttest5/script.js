// Menambahkan validasi form sebelum dikirim
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function(event) {
        // Validasi Nama Perusahaan
        const nama = document.getElementById("nama");
        if (nama.value.trim() === "") {
            alert("Nama perusahaan harus diisi.");
            nama.focus();
            event.preventDefault();
            return false;
        }

        // Validasi Email
        const email = document.getElementById("email");
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email.value)) {
            alert("Masukkan email yang valid.");
            email.focus();
            event.preventDefault();
            return false;
        }

        // Validasi Telepon
        const telepon = document.getElementById("telepon");
        const teleponPattern = /^[0-9]{10,15}$/;
        if (!teleponPattern.test(telepon.value)) {
            alert("Nomor telepon harus berupa angka dan terdiri dari 10-15 digit.");
            telepon.focus();
            event.preventDefault();
            return false;
        }

        // Validasi Alamat
        const alamat = document.getElementById("alamat");
        if (alamat.value.trim() === "") {
            alert("Alamat harus diisi.");
            alamat.focus();
            event.preventDefault();
            return false;
        }
    });
});
