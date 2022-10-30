<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/top.css" >
  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://kit.fontawesome.com/20ea93e84f.js" crossorigin="anonymous"></script>
  <title>あらしちゃんのいーじーもーど</title>
</head>

<body>
  <!-- <header>
  <div class="contents-logo"><a href="/top"><img src="/images/yamaarashi_logo.png"></a></div>
    <div class="contents-list">
      <ul>
        <li><a href="/about">about</a></li>
        <li><a href="/blog">blog</a></li>
        <li><a href="#">production</a></li>
        <li><a href="#">gallery</a></li>
        <li><a href="https://www.instagram.com/brownsuger_1106/" target="_blank">Instagram</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </div>
  </header> -->
<nav class="menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
  <label class="menu-open-button" for="menu-open">
    <img src="/images/yamaarashi_logo.png" class="lines line-1">
    <!-- <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span> -->
 </label>

  <a href="/about" class="menu-item blue"> <i class="fa-solid fa-address-card"></i> </a>
  <a href="/blog" class="menu-item green"> <i class="fa-solid fa-blog"></i> </a>
  <a href="#" class="menu-item red"> <i class="fa-solid fa-laptop-code"></i> </a>
  <a href="#" class="menu-item purple"> <i class="fa-brands fa-twitter"></i> </a>
  <a href="https://www.instagram.com/brownsuger_1106/"  target="_blank" class="menu-item orange"> <i class="fa-brands fa-instagram"></i> </a>
  <a href="https://github.com/keiko-suger"  target="_blank" class="menu-item lightblue"> <i class="fa fa-github"></i> </a>
</nav>

<div class="top-image">
  <img src="/images/harinezumi.png" width="10%">
  <img src="/images/wave_touka.png" width="20%">
</div>

  <script src="{{ asset('js/top.js') }}"></script>
</body>
</html>