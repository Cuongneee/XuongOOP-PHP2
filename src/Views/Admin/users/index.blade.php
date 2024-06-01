<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Danh sách Users</title>
</head>

<body>
    <<div class="container mt-3">
        <h2>Danh sách Users</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Avata</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['create_at'] ?></td>
                        <td><?= $user['update_at'] ?></td>
                        <td>
                            <form action="{{ url('admin/users/' .$user['id'] . '/delete') }}" method="post">
                                <button onclick="return confirm('Chắc chắn muốn xóa ?')" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        </div>
</body>

</html>