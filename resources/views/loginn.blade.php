<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <style>
    #head{
    color: royalblue;
    text-align: center;
    margin-top: 3%;
    font-weight:700;
    margin-left: 2%;
    margin-bottom: 30px;
    }
    .fm{
        margin-left: 2%;
        width: 55%;
        margin-top: 2%;
        border-radius: 10px;
        height: 35px;
        border: solid 1px royalblue;
        margin-top: 3%;
        padding-left: 20px;
        font-weight: 500;
        margin-bottom: 2px;
        /* background-color: rgb(176, 203, 226); */
    }
    input::placeholder {
    color: red;
    font-size:x-small;
}
    .bt{
        /* padding-top: 10px; */
        margin-top: 3%;
        border-radius: 10px;
        height: 30px;
        border: solid 1px royalblue;
        font-weight: 400;
         width: 90%;
         /* margin-left: -20%; */
         
    }
    .sing{
        /* display:flex; */
        padding-left: 30px;
        border: 1px solid;
        height: auto;
        width: 480px;
        border-radius: 15px;
        margin-left: 19%;
        /* margin-top: -10%; */
        margin-bottom: 40px;
    }
    #s{
        margin-left: 70%;
        font-size:smaller;
        width: 300px;
        margin-top: 10px;
        /* align-items: end; */
        /* align-items: flex-end; */
    }
    #pp{
         color: red;
    font-size:x-small;
    margin-bottom: -20px;
    }
    #green{
        color: green;
        margin-bottom: -10px;
        margin-top: 10px;
    }
     #red{
        color: red;
        margin-bottom: -10px;
        margin-top: 10px;
    }
   </style>
</head>
<body>
    <h1 id='head' > Login to Your account</h1>
    <div class="sing">
         @if(isset($msg))
        <h6 id="green" >{{$msg}}</h6>
        @endif
         @if(isset($msg2))
        <h6 id="red" >{{$msg2}}</h6>
        @endif
    <form action="login" method="post">
        @csrf
               <br> Email: <input type="email" class="fm" 
        @if($errors->first("email"))
         placeholder='{{ $errors->first("email") }}'
         @else
          value="{{old('email')}}"
          @endif
          name="email" >
   <br> Password:<input type="password" class="fm" 
    @if($errors->first("pass"))
         placeholder='{{ $errors->first("pass") }}'
         @else
          value="{{old('pass')}}"
          @endif 
           name="pass"  >

   <button class="bt" type="reset">Reset</button>
   <button class="bt" type="submit">Login</button>
    </form>
    <p id="s" ><a href="/login" >Create account</a></p>

    </div>
</body>
</html>