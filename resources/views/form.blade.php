<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
<form action="{{route('customer-store')}}" method="POST">
    @csrf
    <label for="">Name</label>
    <br>
    <input type="text" name="name">
    <br>
    <label for="">Email</label>
    <br>
    <input type="text" name="email">
    <br>
    <label for="">Address</label>
    <br>
    <input type="text" name="address">
    <br>
    <label for="">Phone Number</label>
    <br>
    <input type="text" name="phone">
    <br>
    <label for="">Image</label>
    <br>
    <input type="file" name="image">
    <br>
    <br>
    <button name="submit">Submit</button>
</form>
    
</body>
</html>

