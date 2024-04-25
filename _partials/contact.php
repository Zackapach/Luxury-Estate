<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<h1>Contact Us</h1>
<form action="./_partials/confirmatiion.php" method="post">
    <label for="username">Nom d'utilisateur : </label>
    <input type="text" id="name" name="name" placeholder="name" required>
    <br>
    <br>
    <label for="mail">E-mail : </label>
    <input type="text" id="email" name="email" placeholder="Monmail@gmail. com" required>
    <br>
    <br>
    <label for="message">Message : </label>
    <br>
    <textarea name="Message" id="message" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>