<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../../app.css"/>
    <title>Document</title>
</head>
<body class="container">
    <h1>Liste des client</h1>
    <form action="/client" method="POST">
    @csrf
        <div class="form-group my-4">
        <label>Prenom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            @enderror
        </div>
        <div class="form-group">
        <label>Age</label>
            <input type="tel" class="form-control @error('age') is-invalid @enderror" name="age" value="{{old('age')}}">
            @error('age')
                <div class="invalid-feedback">{{$errors->first('age')}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
            <th scope="row">{{$client->id}}</th>
            <td><a href="/client/{{$client->id}}">{{$client->name}}</a></td>
            <td>{{$client->age}}</td>
            <td>
                <button class="btn btn-warning"><a href="/client/{{$client->id}}/edite"><i class="far fa-edit"></i></a></button>
                <form action="/client/{{$client->id}}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
</body>
</html>