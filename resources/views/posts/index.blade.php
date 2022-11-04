<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mess Note</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <h1>Mess Note</h1>
        <div class='posts'>
            <ul class='posts-list'>
            @foreach ($posts as $post)
                <li>
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <small>{{ $post->user_id }}</small>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                </li>
                
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
                
            @endforeach
            </ul>
        </div>
        
        <a href='/posts/create'>create</a>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>