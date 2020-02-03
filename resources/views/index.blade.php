<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Lumen</title>
</head>
<body>
<header>
    <h1>WEBSTART</h1>
    <p>User Management</p>
</header>
<div class="titlePage">
    <h2>Users</h2>
</div>
<section>
    <div class="users main">
        <div>ID</div>
        <div>FirstName</div>
        <div>LastName</div>
        <div>Email</div>
    </div>
    @foreach ($users as $user)
        <div class="users">
            <div>{{$user->id}}</div>
            <div>{{$user->first_name}}</div>
            <div>{{$user->last_name}}</div>
            <div>{{$user->email}}</div>
        </div>
    @endforeach
</section>
</body>
</html>
