<?php
require_once("includes/config.php");
// $queryFilms = "SELECT filmTitle, filmImage,filmDescription FROM Films WHERE filmID = 10";
$queryFilms = "SELECT * FROM Films WHERE filmID = 15";
$resultFilms = $mysqli->query($queryFilms);
$obj = $resultFilms->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to SHU Films</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link
      rel="stylesheet"
      href="css/desktop.css"
      media="only screen and (min-width : 720px)"
    />
  </head>
  <body>
<?php
include("includes/header.php");
?>
    <div class="mainContainer">
		<main>
      <div class="banner">
        <h2>Banner</h2>
      </div>
      <section class="homePage">
		<!-- Featured Films Here -->
    <?php
    echo "<h2>{$obj->filmTitle}</h2>";
    echo "<p>{$obj->filmDescription}</p>";
    ?>
    </section>
		</main>
    </div>

<?php
// add Footer
?>

    <script src="js/main.js"></script>
  </body>
</html>
