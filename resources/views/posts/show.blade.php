<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <small>{{ $post->user_id }}</small>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="rating">
            <h3>評価項目</h3>
            <p>項目１：{{ $post->rating_1 }}</p>
            <p>項目２：{{ $post->rating_2 }}</p>
        </div>
        <div class="date">
            <h3>日付</h3>
            <p>{{ $post->date }}</p>
        </div>
        
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>