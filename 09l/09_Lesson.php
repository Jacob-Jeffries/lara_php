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

  // Generic Function that could filter based on the key:value
  function filter($items, $key, $value){
    $filteredItems = [];

    foreach($items as $item){

      // Extract IF statement as an anonymous fucntion
      // Create Anaonymous fucntion that contains the logic of the IF statement and pass it in as a siganture variable $filteredItems => $fn($items, $key, $value)
      if ($item[$key] === $value){
        $filteredItems[] = $item;
      }
    }
    return $filteredItems;
  }

  // 
  $filteredItems = filter($items, $key, $value, function($items, $key, $value){
    return $items[$key] === $value;
  })
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