<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container mt-4">
    <h1>Modifier l'utilisateur {{$client->name}}</h1>
    <form action="/client/{{$client->id}}" method="POST">
        @method('PATCH ')
        @csrf
        <div class="form-group">
        <label>Prenom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name') ?? $client->name}}">
            @error('name')
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            @enderror
        </div>
        <div class="form-group">
        <label>Age</label>
            <input type="age" class="form-control @error('age') is-invalid @enderror" name="age" value="{{old('age') ?? $client->age}}">
            @error('age')
                <div class="invalid-feedback">{{$errors->first('age')}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</body>
</html>