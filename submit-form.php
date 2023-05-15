<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio website</title>
    <link rel="stylesheet" href="mainStyles.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Poltawski+Nowy:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <section id="profilePicture">
            <img src="media/ims.jpg">
        </section>
        <section id="mainMenu">
            <ul>
                <li>About me</li>
                <li>Expertise</li>
                <li>Projects</li>
                <li>Contact</li>
            </ul>
        </section>
        <section id="socials">
            <ul>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-linkedin"></i></li>
            </ul>
        </section>
    </header>
    <content>
        <div id="contentContainer">
            <section id="About me">
                <div>
                    <h2><pre id="codeTekst">>> Hello world!</pre><br/></h2>
                    <br/>
                    <h1>Welcome to my portfolio</h1>
                    <p>
                        My name is Ims Storm van Leeuwen, and I'm a passionate front end developer with a strong desire to create beautiful and functional websites that make a positive impact in people's lives. With several years of experience in the field of web development, I'm always striving to stay up-to-date with the latest technologies and trends to deliver the best possible user experience. I believe that every website is an opportunity to tell a unique story, and I'm excited to help bring your vision to life. Feel free to take a look at my portfolio and get in touch if you have any questions or would like to work together
                    </p>
                </div>
            </section>
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
    </div>
    </content>
    <footer>
        <div id="footerContainer">
            <section id="footerMain">
                <div>
                    <h3>This is the footer</h3>
                </div>
            </section>
            <section id="footerSub">
                <h3>This is the bottom footer</h3>
                <ul>
                    <li>Terms & Conditions</li>
                    <li>Privacy statement</li>
                </ul>
            </section>
        </div>
    </footer>
</body>
</html>
</body>
</html>
