<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="内容">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="date">
                <h2>Date</h2>
                <input type="date" name="post[date]" placeholder="日付"/>
            </div>
            <div class="user_id">
                <h2>User_id</h2>
                <input type="int" name="post[user_id]" placeholder="ユーザー"/>
            </div>
            <div class="rating_1">
                <h2>Rating_1</h2>
                <input type="int" name="post[rating_1]" placeholder="評価項目1"/>
            </div>
            <div class="rating_2">
                <h2>Rating_2</h2>
                <input type="int" name="post[rating_2]" placeholder="評価項目2"/>
            </div>
            
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>