<?php

$numToPrintStars = rand(1,20);

  for($i = 0; $i < $numToPrintStars; $i++){
    

    for($j = 0; $j < $i + 1; $j++){
        echo "*";
    }
    echo "<br>"; 
  }

  for($i = 0; $i < $numToPrintStars; $i++){

    for($j = $numToPrintStars - $i; $j > 0; $j--){
        echo "*";
    }
    echo "<br>";
  }
  for ($i = 0; $i < $numToPrintStars; $i++) {
    for($j = 0; $j < $numToPrintStars; $j++){
        if($j < $i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
  }
  for ($i = 0; $i < $numToPrintStars;) {
    $i++;
    for($j = $numToPrintStars; $j > 0; $j--){
        if($j > $i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
}


?>
