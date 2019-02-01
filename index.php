<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $country = 'Lietuva';
    $city = 'Vilnius';
    $population = 574221;
    
    ?> 
    
    <ul>
        <li><?php echo $country; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $population; ?></li>
    </ul>
            
    <p><?php  echo $city . ' - Lietuvos sostinė.' ?></p>
    
    <p><?php echo "$city ir $country  sparčiai auga." ?> </p>
    
    
    
   <?php $largest_population = "true"; 
    
    echo  $largest_population; ?>
    
    <?php 
        $x = 10;
        $y = 7;
          
        $z = $x + $y;   
        echo "$x + $y = $z <br />";

        $z = $x - $y;
        echo "$x - $y = $z  <br />";
    
        $z = $x * $y;
        echo "$x * $y = $z  <br />";
        
        $z = $x / $y;
        echo "$x / $y = $z  <br />";
        
        $z = $x % $y;
        echo "$x % $y = $z  <br />"?>
        
    
</body>
</html>
