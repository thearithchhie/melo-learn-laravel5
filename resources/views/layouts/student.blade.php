<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>student</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-inverse">
            <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            <?php  $i = 1;?>
            @foreach($students as $student)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->sex}}</td>
                    <td>{{$student->phone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
