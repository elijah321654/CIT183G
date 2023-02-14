<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        return 'Hello from users';
    }
    public function show($id){
     
            $data=array(
            "id"=>$id,
            "name"=>"Elijah Mar Estalilla",
            "age"=>22,
            "email"=>"eelijah08@gmail.com"
             );
            return view('user',$data); 
            }
        }