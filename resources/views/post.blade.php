<!DOCTYPE html>
<html>
<head>
    <title>MyBlog</title>
</head>
<body>
<h1>{{var_dump($post)}}</h1>
<h1>{{$post->title ?? null}}</h1>
<h1>{{$post->body ?? null}}</h1>
</body>
</html>
