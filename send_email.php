<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email tujuan
    $to = "gilangardhi87@gmail.com";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Pesan email
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message: \n$message\n";

    // Kirim email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email berhasil dikirim.";
    } else {
        echo "Pengiriman email gagal.";
    }
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
