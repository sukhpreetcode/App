


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        #f{
            /* margin-top: 20px;
            margin-left: 10%; */
            font-size: 20px;
            color: royalblue;
        }
         #b{
            /* margin-top: -35px;
            margin-left: 40%; */
            font-size: 20px;
        }
        #h{
            margin-top: 40px;
            text-align:center; 
        }
        .na{
            display: flex;
            margin-left: 10%;
            gap: 1%;
        }
    </style>
</head>
<body>
    @if(session('login'))
<x-nav />
<h1 id="h" ><u>profile Page</u></h1>
 <div class="na"><h3 id="f" > First name : </h3> <h3 id="b"> {{session('first')}} </h3></div>   
<pre>__________________________________________________________________________________________________</pre>
 <div class="na"><h3 id="f"> Last name : </h3><h3 id="b"> {{session('last')}} </h3></div>
 <pre>__________________________________________________________________________________________________</pre>
 <div class="na"><h3 id="f"> Email : </h3><h3 id="b"> {{session('email')}}</h3></div>
<pre>__________________________________________________________________________________________________</pre>
<div class="na"><h3 id="f"> Date Of Birth : </h3><h3 id="b"> {{ \Carbon\Carbon::parse(session('dob'))->format('d-m-Y') }} </h3></div>
@else
<h1>session nhi hai</h1>
@endif
</body>
</html>