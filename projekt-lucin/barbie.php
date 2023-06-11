<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbie movies</title>
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Barbie movies</h1>

  <div class="container">
    <?php
      // Ucitavanje XML datoteke
      $xml = simplexml_load_file('filmovi.xml');

      // Prikazivanje podataka iz XML-a
      foreach ($xml->movie as $movie) {
        echo '<div class="movie">';
        if (!empty($movie->image)) {
          $imagePath = 'images/' . $movie->image;
          echo '<img src="' . $imagePath . '" alt="' . $movie->title . '">';
        }
        echo '<h2>' . $movie->title . '</h2>';
        echo '<p>' . $movie->genre . '</p>';
        echo '<p>Year: ' . $movie->year . '</p>';
        echo '<p>Director: ' . $movie->director . '</p>';
        echo '</div>';
      }
    ?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
