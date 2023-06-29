<?php
 $test = '';
    if ($_GET['q'] == '') {
        $test = 'Tetgrem.com';
    } else {
        $test = ucfirst($_GET['q']) . ' - Tetgrem.com';
    }
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $test ?></title>
<link rel="stylesheet" href="http://tetgrem.com/assets/css/style.min.css">
<link rel="icon" href="./img/favicon.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700;900&display=swap" rel="stylesheet">
