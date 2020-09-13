<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Reminder;
// use Sentinel;
use Mail;
use App\Models\Users;
use Sentinel;

class ForgetPasswordController extends Controller
{
   public function forget(){
   		return view('forgetpassword.forget_password');
   }

   public function password(Request $request){
   		$user=Users::whereEmail($request->email)->first();

   		if($user== null){
   			return redirect()->back()->with(['error'=>'Email not exit']);
   		}

   		$user= Sentinel::findById($user->id);
   		$remimder= Reminder::exists($user) ? : Reminder::create($user);
   		$this->sendEmail($user, $remimder->code);
   		return redirect()->back->with(['success'=>'reset code send to your email']); 
   }

   public function sendEmail($user,$code)
   {
   		Mail::send(
   			'email.forget',
   			[
   			'user'=>$user,'code'=>$code],
   			function($message) use ($user){
   				$message->to($user->email);
   				$message->subject("$user->email, reset your password");
   			}
   		);
   	}

}
