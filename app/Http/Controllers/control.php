<?php

namespace App\Http\Controllers;
use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\password;

class control extends Controller
{
    function create(request $re){
$re->validate(['first'=>'required|min:3','last'=>'required|min:3','email'=>'required|email','Dob'=>'required','pass'=>'required|confirmed|min:8']
,['first.required'=>'First name is Required.',
'first.min'=>'The first name must be at least :min characters.',
'last.required'=>'The last name is Required.',
'last.min'=>'The last name must be at least :min characters.',
'email.email'=>'The email field must be a valid email address.',
'email.required'=>'The email is Required.',
'Dob.required'=>'The date of birth is Required.',
'pass.required'=>'The password is Required.',
'pass.min'=>'The password must be at least :min characters.',
'pass.confirmed'=>'The Password should be match.'
]);


 $save=account::insert(['fname'=>$re->first,'lname'=>$re->last,'email'=>$re->email,'dob'=>$re->Dob,'password'=>$re->pass]);
 if($save){
    $im=account::where('email',$re->email)->where('password',$re->pass)->first();
// return $im;

 session()->put('login',true);
    session()->put('first',$im->fname);
    session()->put('last',$im->lname);
    session()->put('email',$im->email);
    session()->put('dob',$im->dob);
    return view('home');

    // return view('loginn',['msg'=>"Your account is created,enter email or password to login"]);
 }    else{
    return view('login',['msg'=>'Something wrong,try again']);
    // return "not added";
 }
 
    }


     function login(request $re){
$re->validate(['email'=>'required|email','pass'=>'required'],[
'email.email'=>'The Email field must be a valid email address.',
'email.required'=>'The email is Required.',
'pass.required'=>'The password is Required.',
]);
// return $re;

$em=account::where('email',$re->email)->where('password',$re->pass)->first();
if(isset($em)){
    session()->put('login',true);
    session()->put('first',$em->fname);
    session()->put('last',$em->lname);
    session()->put('email',$em->email);
    session()->put('dob',$em->dob);
    return view('home');
}else{
    return view('loginn',['msg2'=>"Account not found"]);
}
    }
}
