<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Account</h1>
    <form action="{{ route('ogts.update', ['student' => $student]) }}" method="post">
        @csrf
        @method('put')
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{$student->username}}">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" value="{{$student->password}}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>