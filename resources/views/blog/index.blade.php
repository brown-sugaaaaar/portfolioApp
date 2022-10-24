<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/blog.css" >
  <title>ぶろぐ</title>
</head>
<body>
  <header>
  <div class="contents-logo"><a href="/top"><img src="/images/logo_51.png"></a></div>
    <div class="contents-list">
      <ul>
        <li><a href="#">about</a></li>
        <li><a href="/blog">blog</a></li>
        <li><a href="#">production</a></li>
        <li><a href="#">gallery</a></li>
        <li><a href="https://www.instagram.com/brownsuger_1106/" target="_blank">Instagram</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </div>
  </header>
  <div class="top">
      <h1>index</h1>
        <ul>
          @foreach($blogs as $blog)
          <li>{{$blog->created_at}}&emsp;<a href="/blog/{{$blog->id}}">{{$blog->title}}</li>
          @endforeach
        </ul>
  </div>
</body>
</html>