<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>homepage</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header id="header">
  <h1><a href="./">logo</a></h1>
  <nav class="gnb">
    <ul class="clearfix">
      <li <? if($location=="company"){echo 'class="active"';}?>>
      <a href="company.php">menu1</a></li>
      <li <? if($location=="product"){?> class="active"<?}?>><a href="product.php">menu2</a></li>
      <li><a href="#">menu3</a></li>
      <li><a href="#">menu4</a></li>
      <li><a href="#">menu5</a></li>
    </ul>
  </nav>
</header>
