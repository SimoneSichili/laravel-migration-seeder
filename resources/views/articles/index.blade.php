<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">      
        <!-- my CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Blog CRUD Index</title>
    </head>
    <body>
        <h1 class="my-3">Lista degli articoli</h1>
        <a href="{{ route("articles.create") }}" class="btn btn-primary my-5">Crea un nuovo articolo</a>
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Titolo </th>
                <th>Sottotitolo</th>
                <th>Autore</th>
                <th>Testo</th>
                <th>Pubblicato il</th>
                <th>Creato il</th>
                <th>Aggiornato il</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->subtitle }}</td>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->text }}</td>
                        <td>{{ $article->publication_date }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td><a href="{{ route("articles.show", $article->id) }}" class="btn btn-primary"><i class="fas fa-search-plus"></i></a></td>
                        <td><a href="#" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
