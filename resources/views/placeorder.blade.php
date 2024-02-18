<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Place Your Order Here</h1>
    <div>
        <form action="{{route('placeorder')}}" method="post">
            @csrf
            <label>Item Name</label>
            <select name="name">
                <option selected value="">Choose....</option>
                <option value="battery">battery</option>
                <option value="potato">potato</option>
                <option value="apple">apple</option>
                <option value="orange">orange</option>
            </select>
            @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror
            <br><br>

            <label>Quantity</label>
            <input type="number" name="quantity" id="quantity" placeholder="Enter your iteam">
            @error('quantity')
        <span style="color:red">{{$message}}</span>
        @enderror
            
            <br><br>

            <label>Date</label>
            <input type="date" name="date" id="date" placeholder="Enter your iteam">
            @error('date')
        <span style="color:red">{{$message}}</span>
        @enderror

            <br><br>
            <label>Description</label>
           <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
           @error('desc')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

           <button type="submit">Order</button>
         <button type="reset">Reset</button>
           
         <br> 
         
         @if(session('status'))
        <span style="color:red">{{session('status')}}</span>
        @endif




        </form>
    </div>







</body>
</html>