<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa User</title>
</head>
<body>
    <form action="{{ url('admin/users/' . $oneUser['id'] . '/update') }}" method="post">

        <label for="">Name</label>
        <input type="text" name="name" value="{{ $oneUser['name'] }}">

        <label for="">Avata</label>
        <input type="file" name="avata">

        <label for="">Email</label>
        <input type="email" name="email" id="" value="{{ $oneUser['email'] }}">

        <label for="">Password</label>
        <input type="password" name="password" id="" value="{{ $oneUser['password'] }}">

        <button type="submit">Update</button>
    </form>
</body>
</html>