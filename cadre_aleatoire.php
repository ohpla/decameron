<html>
  <head>
    <title>PHP-cadre-aleatoire</title>
  </head>
  <body>
<?php
header('Cache-Control: no-cache');
$imgs = array(
                'http://static.tumblr.com/eznt7u3/vcIolql62/cadre01.png',
                'http://static.tumblr.com/eznt7u3/j8iolqlt3/cadre02.png',
                'http://static.tumblr.com/eznt7u3/NYHolqltc/cadre03.png',
                'ihttp://static.tumblr.com/eznt7u3/MvKolqltl/cadre04.png'
        );
$img_id = mt_rand(0,(count($imgs)-1));
header('Location: '.$imgs[$img_id]);
?>
  </body>
</html>
