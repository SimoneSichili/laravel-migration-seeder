<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">      
        <!-- my CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Blog CRUD Singolo articolo</title>
    </head>
    <body>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <td class="table-dark">ID</td>
                    <td>{{ $article->id }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Titolo</td>
                    <td>{{ $article->title }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Sottotitolo</td>
                    <td>{{ $article->subtitle }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Autore</td>
                    <td>{{ $article->author }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Testo</td>
                    <td>{{ $article->text }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Pubblicato il</td>
                    <td>{{ $article->publication_date }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Creato il</td>
                    <td>{{ $article->created_at }}</td>
                </tr>
                <tr>
                    <td class="table-dark">Aggiornato il</td>
                    <td>{{ $article->updated_at }}</td>
                </tr>
        </table>
        <div class="text-right">
            <a href="{{ route("articles.index") }}" class="btn btn-primary">Torna agli articoli</a>
        </div>
        </div>
    </body>
</html>
