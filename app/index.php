<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- GITHUB -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- BULMA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <!-- STYLE SCSS -->
    <link rel="stylesheet" href="app/src/assets/sass/style.scss">

    <title>GameProject</title>
</head>
<body>


    <button><a href="increase_vote.php?game=macron">Voter</a></button>


</body>
</html>

<br>
<?php 

$game = "macron";
// Connect to database
$db = new PDO('mysql:host=localhost;dbname=game_vote', 'root','root');

//Request to database (get nb_vote)
$q = $db->prepare("SELECT  * FROM votes WHERE slug_game = :game");
$q->bindParam(":game", $game);
$q->execute();

$data = $q->fetch(PDO::FETCH_ASSOC);

echo $data["nb_votes"] . " votes";

?>