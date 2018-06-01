<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 1-6-2018
 * Time: 13:58
 */





$user = "schooluser";
$pass = "school";
$width = '800px';
$height = '450px';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306', $user, $pass);
    foreach($dbh->query('SELECT * FROM playlist WHERE id=\'PoPL7BExSQU\';') as $row) {

    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bootstrap</title>
</head>
<body>


<nav class="navbar navbar-inverse navbar-toggleable-sm bg-danger text-white mb-4">
    <div class="container">
        <a href="#" class="navbar-brand mr-auto">SpotiTube</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home</a>
            <a class="nav-item nav-link" href="playlist.html">Playlist</a>
        </div><!-- navbar-nav -->
    </div><!-- container -->
</nav>
<header class="jumbotron  jumbotron-fluid mb-0 bg-warning text-white" style="background-image: url(./img/rockbackground3.jpg);">
    <div class="container">
        <div class="display-2 mb-4">SpotiTube</div>
    </div>
</header>
<div class="container">
    <h3 style="margin-top: 2%; margin-bottom: 2%;">Video</h3>
    <div class="row">
        <div class="col-sm-4">
            <?php echo $row['naam'] ?>
            <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
                    src="https://www.youtube.com/embed/<?php echo $row['id'] ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="card-footer">
    <h6> Company.inc</h6>
</div>


<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>