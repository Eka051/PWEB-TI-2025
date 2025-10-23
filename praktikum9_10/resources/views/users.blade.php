<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
</head>
<body>
    @foreach ($users as $user)
        <div>
            <h4>Name : {{ $user->name }}</h4>
            <p>Email : {{ $user->email }}</p>
        </div>
    @endforeach

</body>
</html>