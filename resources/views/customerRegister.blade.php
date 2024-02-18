<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 

    <h1>User Registration</h1>

    <div>

    <form action="{{route('insertuser')}}" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>
       

        <label>Email</label>
        <input type="email" name="email" id="name" placeholder="Enter your Email">
        @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>
        


        <label>Address</label>
        <input type="address" name="address" id="address" placeholder="Enter your Address">
        @error('address')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your nmae">
        @error('phone')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Passsword</label>
        <input type="password" name="password" id="passsword" placeholder="Enter your password">
        @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" id="password" placeholder="Confirm password">
        @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror

        <br><br>
        <button type="submit">Register</button>
        <button type="reset">Reset</button>

        @if(session('status'))
        <span style="color:red">{{session('status')}}</span>

        @endif


    </form>



    </div>
    
</body>
</html>