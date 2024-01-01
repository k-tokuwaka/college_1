<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Blog</title> <!--ブラウザ上部に表示されるタイトル-->

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>Blog Name</h1><!--見出し-->
        <div class = 'posts'><!--記事一覧-->
            @foreach ($posts as $post) <!--＠foreach（ループする配列 as 値）-->
                <div class = 'post'><!--記事のまとまりの段落-->
                    <h2 class = 'title'><!--記事のタイトル-->
                        {{ $post->title }}<!--アロー演算子でインスタンスの要素にアクセス-->
                    </h2><!--記事の本文-->
                    <p class = 'body'>
                        {{ $post->body }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>