<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
   <?php $name = $_GET["name"]; ?>

    <h1>Ciao mi chiamo <?php echo $name; ?></h1>
    
    <?php $string = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et debitis, est ex quos maxime in rem quis ipsa nostrum. Sint, suscipit modi! Sequi consectetur, neque hic quisquam voluptatum voluptatem itaque?";?>
    
    <h1>Il Paragrafo è lungo: <?php echo strlen($string); ?></h1>
    <?php echo $string; ?>

    <?php $newString = str_replace($name,"***",$string); ?>

    <h1>Il Nuovo Paragrafo è lungo: <?php echo strlen($newString); ?></h1>
    <?php echo $newString; ?>
</body>
</html>