<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $age = $_POST['age'] ?? '';
    $batting = isset($_POST['batting']) ? implode(', ', $_POST['batting']) : '';
    $bowling = isset($_POST['bowling']) ? implode(', ', $_POST['bowling']) : '';
    $wicketKeeper = isset($_POST['wicket_keeper']) ? 'Yes' : 'No';
    $allRounder = isset($_POST['all_rounder']) ? 'Yes' : 'No';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bnafalconscricket@gmail.com'; // Your Gmail email address
        $mail->Password = 'gcdowiwhhftttqdv'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('bnafalconscricket@gmail.com', 'BNA Falcons Cricket'); // Your Gmail email and name
        $mail->addAddress('bnafalconscricket@gmail.com', 'BNA Falcons Cricket'); // Recipient's email and name
         // Attach photo
         if (!empty($_FILES['photo']['tmp_name'])) {
            $mail->addAttachment($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
        }
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Registration';
        $mail->Body = "
            <h1>New Registration</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Batting:</strong> $batting</p>
            <p><strong>Bowling:</strong> $bowling</p>
            <p><strong>Wicket Keeper:</strong> $wicketKeeper</p>
            <p><strong>All Rounder:</strong> $allRounder</p>
        ";

        $mail->send();
        echo '<script>
        window.alert("Submitted Successfully");
        window.location.href = "index.php";
      </script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}

?>
