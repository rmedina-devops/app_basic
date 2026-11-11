<?php

namespace App\Controller;

use flight\Engine;

class AuthController {

    protected Engine $app;

    public function __construct(Engine $app){
        $this->app = $app;
    }
    public function login(){
        echo $this->app->view()->run('login',[
            'title' => "Login",
            'year'  => date('yyyy'),
            'author'=> getenv('AUTHOR') ?: 'Demo'
        ]);
    }

    public function validate(){
        $data = $this->app->request()->data;
        $pass = password_hash($data->password, PASSWORD_DEFAULT);
        if (empty($data)) {
            $this->app->halt(404, "Data is empty");
        }
        if ($data->email === "medinast30@gmail.com" && password_verify('1234', $pass)) {
            echo $this->app->json([
                'status' => 203, 
                'message' => 'Login success'
                ],
            );
        }else {
            echo $this->app->json(
                [
                    'status' => 405,
                    'message' => 'Data is incorrect'
                    ]
            );
        }
        
    }
}