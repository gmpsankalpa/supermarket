<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login here</h1>


<div>
    <form action="{{route('userlogin')}}" method="post">
    @csrf
    <label>Email</label>
    <input type="email" name="email" id="email" placeholder="Enter your email">
    @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>
    
    <label>Password</label>
    <input type="password" name="password" id="password" placeholder="Enter your password">
    @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror

    <br><br>
    <button type="submit">Login</button>

    @if(session('status'))
        <span style="color:red">{{session('status')}}</span>
        @endif

    </form>

</div>


    
</body>
</html>