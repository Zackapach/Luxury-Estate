<!DOCTYPE html>

<html>

<head>

    <title>Confirmation</title>

</head>

<body>

    <h1>Thank you for your message!</h1>

    <p>Here is the information you submitted:</p>

    <ul>

        <li><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>

        <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>

        <li><strong>Message:</strong> <?php echo htmlspecialchars($_POST['message']); ?></li>

    </ul>

</body>

</html>