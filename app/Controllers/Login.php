<?php

namespace App\Controllers;

class Login extends BaseController{

    public function Login(){
        return view('/login/login');
    }
}