<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Students</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->username }}</td>
                            <td>{{ $student->password }}</td>
                            <td>
                                <a href="{{route('ogts.edit', ['student' => $student])}}">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('ogts.destroy', ['student' => $student])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>