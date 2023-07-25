<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
  
  <ul>
    <?php foreach ($filteredMovies as $movie) : ?>
        <li>
            <h1><?= $movie['name'] ?> 
        </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>