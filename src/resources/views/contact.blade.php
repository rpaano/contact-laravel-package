<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact U Anytime</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="your name">
        <input type="text" name="email" placeholder="your email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Query"></textarea>
        <input type="submit">
    </form>
</body>
</html>
