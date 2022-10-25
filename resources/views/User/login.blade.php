@extends('partials.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Pages</title>
    @extends('partials.head')
</head>
<body>
    @section('content')
        <div class="container">
            <form action="check" method="POST">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">* Email address</label>
                    <input name="email" type="iniTextJanganTerkecoh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">* Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @endsection
</body>
</html>