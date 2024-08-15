<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITEMS PAGE</title>
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <h1>TODO IN LARAVEL</h1>
            <hr>
            <a href="/ajouter" class="btn btn-info">Ajouter un étudiant</a>
            <hr> 

            <div style="overflow-x:auto;">
                <table class="table table-striped">
                    <thead>
                        <tr>             
                            <th>No</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$ide}}</td>
                                <td>{{$item->titre}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <a href="/update-item/{{$item->id}}" class="btn btn-succes">Modifier</a>
                                    <a href="/delete-item/{{$item->id}}" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            @php
                                $ide += 1;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>