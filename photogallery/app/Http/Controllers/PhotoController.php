<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        die('Photo/INDEX');
    }

    public function create(){
        die('Photo/CREATE');
    }

    public function store(Request $request){
    }

    public function details($id){
        die($id);
    }
}
