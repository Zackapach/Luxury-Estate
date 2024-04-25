<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/newstyle.css">
    <title>New announcments</title>
</head>

<body>
    <?php require_once "../_partials/_navbar.php";
    include "../_partials/_table.php";
    
     ?>

   

    <main>

        <form class="newform" action="" method="post" enctype="multipart/form-data">

            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="" required>

            <br>
            <label for="rs">Rent/Sale</label>
            <select name="rs" id="rs" required>
                <option value="">Choose an option</option>
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
            </select>

            <br>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="prix en devise : $, €, etc ..">

            <br>
            <label for="img">Choose a profile picture:</label>
            <input type="file" name="img[]" accept="image/png, image/jpeg" required />

            <br>
            <label for="squaremeters">Squaremeters</label>
            <input type="text" name="squaremeters" placeholder="surface en m2">

            <br>
            <label for="room">Room</label>
            <input type="text" name="room" placeholder="nombre de chambre">

            <br>
            <label for="salon">Salon</label>
            <input type="text" name="salon" placeholder="nombre de salon">

            <br>
            <label for="bathroom">bathroom</label>
            <input type="text" name="bathroom" placeholder="nombre de chambre">

            <br>
            <label for="swimingpool">Swimingpool</label>
            <input type="text" name="swimingpool" placeholder="nombre de chambre">

            <br>
            <label for="annonce">Description</label>
            <br>

            <textarea name="annonce" id="description" cols="30" rows="10"></textarea>
            <br>
            <button type="submit">Envoyer</button>


        </form>
 <?php
 $errors = [] 
 
 
 
 
 
 ?>

        <?php
        if(empty($errors)){
            $cards[] =
            [
                "title" => ($_POST['title']),
                "rs" => ($_POST['rs']),
                "price" => ($_POST['price']),
                "img" => "/assets/img/villa1.png",
                "id" => uniqid('z'),
                "favorite" => random_int(0, 1),
                "squaremeters" => ($_POST['squaremeters']),
                "room" => ($_POST['room']),
                "salon" => ($_POST['salon']),
                "bathroom" => ($_POST['bathroom']),
                "swimingpool" => ($_POST['swimingpool']),
                "annonce" => ($_POST['annonce'])
            ];

        }
       // var_dump($cards)
        ?>

    </main>





    <?php require_once "../_partials/_footer.php"; ?>
</body>

</html>