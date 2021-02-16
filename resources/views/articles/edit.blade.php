<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">      
        <!-- my CSS -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>Blog CRUD Crea Articolo</title>
    </head>
    <body>
        <div class="container">
            <h1 class="my-3">Modifica un articolo</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route("articles.update", $article->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un titolo" value="{{ $article->title }}">
                </div>
                <div class="form-group">
                    <label for="subtitle">Sottotitolo</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Inserisci un sottotitolo" value="{{ $article->subtitle  }}">
                </div>
                <div class="form-group">
                    <label for="author">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Inserisci un autore" value="{{ $article->author  }}">
                </div>
                <div class="form-group">
                    <label for="text">Testo dell'articolo</label>
                    <textarea class="form-control" id="text" name="text" rows="6" placeholder="Inserisci un testo">{{ $article->text  }}</textarea>
                </div>
                <div class="form-group">
                    <label for="publication_date">Data</label>
                    <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ $article->publication_date  }}">
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </body>
</html>
