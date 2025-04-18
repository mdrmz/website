<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "seninmailadresin@example.com"; // BURAYI KENDİ E-POSTAN İLE DEĞİŞTİR
    $subject = "Yeni İletişim Formu Mesajı";
    $body    = "Ad: $name\nEmail: $email\nMesaj:\n$message";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi.";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
} else {
    echo "Geçersiz istek.";
}
?>
