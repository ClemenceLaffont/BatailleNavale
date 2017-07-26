<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 0; $i <= 10; $i++) {
        echo '<section>';
        for($j = 0; $j <= 10; $j++) {
            if($i == 0) {
                echo '<div>'.$j.'</div>';
            } else if($j == 0) {
                echo '<div>'.$i.'</div>';
            } else {
                echo '<div></div>';
            }
        }
        echo '</section>';
    }
    ?>
    <script type="text/javascript" src="js/model.js"></script>
    <script type="text/javascript" src="js/vue.js"></script>
    <script type="text/javascript" src="js/controler.js"></script>
</body>
</html>