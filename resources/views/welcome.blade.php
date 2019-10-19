<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        Busqueda de Usuarios
                        <form action="{{ route('users') }}" class="form-inline pull-right" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('name',request()->get('name')) }}"  placeholder="name" autocomplete="off" name="name" id="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('email',request()->get('email')) }}"  placeholder="email" autocomplete="off" name="email" id="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('bio',request()->get('bio')) }}"  placeholder="bio" autocomplete="off" name="bio" id="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-secondary" value="Buscar">
                            </div>
                        </form>
                    </h1>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover table-striped">
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->bio }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-auto">
                        {{ $users->appends(['name'=>request()->get('name'),
                                            'email'=>request()->get('email'),
                                            'bio'=>request()->get('bio')])
                                 ->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>