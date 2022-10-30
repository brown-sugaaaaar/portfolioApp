<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/blog.css" >
  <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">

  <title>ぶろぐ</title>
</head>
<body>
  <header>
  <div class="contents-logo"><a href="/top"><img src="/images/yamaarashi_logo.png" class="btn-icon"></a></div>
    <div class="contents-list">
      <ul>
        <li class="btn"><a href="/about">about</a></li>
        <li class="btn"><a href="/blog">blog</a></li>
        <li class="btn"><a href="#">production</a></li>
        <li class="btn"><a href="#">gallery</a></li>
        <li class="btn"><a href="https://www.instagram.com/brownsuger_1106/" target="_blank">Instagram</a></li>
        <li class="btn"><a href="#">Twitter</a></li>
      </ul>
    </div>
  </header>
  <div class="top-detail">
      <h1>blog</h1>

          <p>{{$blog->created_at}}&emsp;{{$blog->title}}</p>
          <p>{{$blog->detail}}</p>
          <img src="/storage/blog_image/{{$blog->image_name}}.jpg" height="50%">
  </div>
</body>
</html>