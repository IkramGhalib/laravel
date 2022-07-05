<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
    <h1>Edit Form</h1>
    <form action="{{route('customer-update',$customer->id)}}" method="POST">
    @csrf
    <label for="">Name</label>
    <br>
    <input type="text" name="name" value="{{$customer->name}}">
    <br>
    <label for="">Email</label>
    <br>
    <input type="text" name="email" value="{{$customer->email}}">
    <br>
    <label for="">Address</label>
    <br>
    <input type="text" name="address" value="{{$customer->address}}">
    <br>
    <label for="">Phone Number</label>
    <br>
    <input type="text" name="phone" value="{{$customer->phone}}">
    <br>
    <label for="">Image</label>
    <br>
    <input type="file" name="image">
    <br>
    <br>
   <img src="{{$customer->image}}" alt="" width="100" height="80">
    <br>
    <br>
    <button name="submit">Submit</button>
</form>
    
</body>
</html>