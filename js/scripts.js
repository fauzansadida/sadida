document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("booking-form");

    form.addEventListener("submit", function(event) {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const date = document.getElementById("date").value.trim();

        if (name === "" || email === "" || date === "") {
            alert("Semua field harus diisi!");
            event.preventDefault(); // Mencegah pengiriman form jika ada field yang kosong
        }

        // Validasi email sederhana
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Email tidak valid!");
            event.preventDefault();
        }
    });
});
