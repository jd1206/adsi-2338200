<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show All Users</title>
</head>
<style>
    body{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: black;
    }
    table {
        border-collapse: collapse;
        width: 90%;
    }
    table th, table td{
        border: 1px solid black;
        padding: 1rem
    }
    table tr:nth-child(even){
        background-color: beige
    }
    table thead{
        background-color: rgb(226, 219, 182);
    }
</style>
<body>
    <main>
        <h1>Show all Users</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->phone}}</td>
                        <td>{{ $user->birthdate}}</td>
                        <td>{{ $user->gender}}</td>
                        <td>{{ $user->address}}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
