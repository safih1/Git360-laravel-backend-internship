<?php
namespace App\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ResetPassword extends FormRequest{
    public function authoziation(){
        return true;
        
    }




    public function rules(){
        return[
            'password'=>'required|min:6',
            'confirmpassword' => 'reqiured|min:6|same:password',
        ];
    }
}



?>