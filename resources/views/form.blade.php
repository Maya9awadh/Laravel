<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
    @if($errors ->any())
    <ul>
        @foreach($errors ->all() as $error)
            <li> {{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="/form/submit" method='POST'>

        @csrf
        <label for="">Name</label>
        <input type="text" name="name"  >

        <br>

        <label for="">Email</label>
        <input type="text" name="email" >

        <br>
        
        <label for="">Password</label>
        <input type="password" name="password" >
        <br>

        <input type="submit" value='Submit'>
    </form>
</body>
</html>
