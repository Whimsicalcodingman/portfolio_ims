<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = 'iwhjstorm@gmail.com'; // Replace with your own email address
            $subject = 'New message from contact form';
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            if (mail($to, $subject, $body)) {
                echo 'Thank you for your message. We will get back to you as soon as possible.';
            } else {
                echo 'There was an error sending your message. Please try again later.';
            }
        }
    ?>
</body>
</html>
