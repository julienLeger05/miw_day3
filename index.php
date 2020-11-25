<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php?email=' . $_POST['email']);
    exit;
}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="La plus grosse soirée de l'année">

    <title>MIW Party</title>

    <style>
        .delivery_sent {
            background-color: green;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body class="<?= $body_class ?>">
    <form action="#" method="post">
        <input type="email" name="email" placeholder="Ton email de star..." required />
        <label for="submit">
            <span>Inscris-toi !</span>
            <img src="img/vip.svg" alt="enveloppe">
        </label>
        <input type="submit" value="" id="submit" />

    </form>
    <div class="ok">
        <div>
            <img src="img/mail.svg" alt="mail envoyé">
        </div>
    </div>
</body>

</html>