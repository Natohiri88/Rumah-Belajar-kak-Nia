<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);

    // Tentukan alamat email penerima
    $to = "your-email@example.com";  // Ganti dengan alamat email tujuan

    // Tentukan subjek email
    $subject_email = "Pendaftaran Jasa Les Online - $name";

    // Isi email
    $message = "
    Nama: $name\n
    Email: $email\n
    Mata Pelajaran: $subject\n
    ";

    // Tentukan header email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Kirim email
    if (mail($to, $subject_email, $message, $headers)) {
        echo "Terima kasih, pendaftaran Anda telah berhasil!";
    } else {
        echo "Maaf, terjadi kesalahan dalam pengiriman email.";
    }
} else {
    echo "Akses tidak diperbolehkan.";
}
?>
