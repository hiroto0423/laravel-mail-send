<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>{{$text}}</p>
  <h1>メール作成</h1>
  <form action="/mailsend" method="post">
    @csrf
  <label for="email">送信先</label>
    <input type="text" name="email">
    <label for="subject">件名</label>
    <input type="text" name="subject">
    <label for="mailtext">メール文</label>
    <textarea name="mailtext" id="" cols="30" rows="10"></textarea>
    <button>送信する</button>
  </form>
</body>
</html>