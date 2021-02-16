<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">      
        <!-- my CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="my-5">Articoli</h1>
        @foreach ($articles as $article)
            <section class="mb-5">
                <h2>{{ $article->title }}</h2>
                <h4>{{ $article->subtitle }}</h4>
                <p>{{ $article->text }}</p>
                <h5>{{ $article->author }}</h5>
                <h6>{{ $article->publication_date }}</h6>
            </section>
        @endforeach
    </body>
</html>
