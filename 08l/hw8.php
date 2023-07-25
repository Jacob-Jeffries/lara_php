<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
  <?php
    $movies = [
        [
            'name' => 'Back to the Future',
            'releaseYear' => 1985,
        ],

        [
            'name' => "Weekend at Bernie's",
            'releaseYear' => 1989,
        ],

        [
            'name' => 'Pirates of the Caribbean',
            'releaseYear' => 2003,
        ],

        [
            'name' => 'Interstellar',
            'releaseYear' => 2014,
        ],
    ];

    // The array_filter is looking for a boolean return, it is acting like it own foreach & if statement combined
    $filteredMovies = array_filter($movies, function($movie){
      return $movie['releaseYear'] >= 2000;
    } );
  ?>

  <ul>
      <?php foreach ($filteredMovies as $movie) : ?>
          <li>
              <h1><?= $movie['name'] ?> 
          </li>
      <?php endforeach; ?>
  </ul>
</body>
</html>