<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agent Settings</title>
    @extends('partials.head')
</head>
<body>
    @extends('partials.sidebar')
    @section('content')
        <div class="container">
            <center><h1>Data Agent</h1></center>
            <hr>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($agent as $agents) 
                  <tr>
                    <th scope="row">#</th>
                    <td>{{$agents->username}}</td>
                    <td>{{$agents->email}}</td>
                    <td>{{$agents->password}}</td>
                    <td></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    @endsection
</body>
</html>