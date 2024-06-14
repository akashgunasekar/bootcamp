<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($name, $email, $number, $emer)
{
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = false;                                          // Enable verbose debug output
        $mail->isSMTP();                                                  // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                            // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                       // Enable SMTP authentication
        $mail->Username = 'schooloftechies@gmail.com';               // SMTP username
        $mail->Password = 'imgkejsbclatcepo';                       // SMTP password
        $mail->SMTPSecure = 'ssl';                                   // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('6383990217s@gmail.com', 'Bootcamp Form Details');
        $mail->addAddress('6383990217s@gmail.com');          // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Bootcamp Form Details';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone Number: $number<br>Emergency Number: $emer";

        $mail->send();
        $_SESSION['status'] = "success";
    } catch (Exception $e) {
        $_SESSION['status'] = "failure";
    }
}

function submitFormData($name, $email, $number, $emer)
{
    $areYou = $_POST['subject'];
    sendEmail($name, $email, $number, $emer);

    // Send to Google Sheets based on heading value
    $url = "https://script.google.com/macros/s/AKfycbyljp36zdHgQ8HXN8uVLozDkWTP_7f0ozx31kOpB9Avo8mcoyJTCLn6ikAdphhYv_O0/exec";
    if ($url !== '') {
        $data = [
            'Name' => $name,
            'Email' => $email,
            'Number' => $number,
            'Emergency' => $emer,
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            // Handle error
            $_SESSION['status'] = "failure";
        }
    }
}

// Check if the hidden input field "hidden-input" is set and not empty
if (isset($_POST["hidden-input"]) && !empty($_POST["hidden-input"])) {
    header("Location: https://schooloftechies.com/");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $emer = $_POST['emer'];

    submitFormData($name, $email, $number, $emer);

    header("Location: index.php");
    exit;
}
?>