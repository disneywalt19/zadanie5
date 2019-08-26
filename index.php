<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JSON - pobieranie i korzystanie z danych</title>
</head>
<body>
  <h1>JSON - pobieranie i korzystanie z danych</h1>
  <p id="json-wrapper"></p>

  <?php

    $jsondata = file_get_contents("places.json");
    $json = json_decode($jsondata, true);
    $output = "<ul>";
    foreach($json['geonames'] as $geoname)
    {
    $output .= "<h4>".$geoname['summary']."</h4>";
    
    // $output .= "<h4>".$geoname['elevation']."</h4>";
    // $output .= "<h4>".$geoname['distance']."</h4>";
    // $output .= "<h4>".$geoname['lng']."</h4>";
    }
   
   $output .="</ul>";
    echo $output;
    ?>
 
</body>
</html>
