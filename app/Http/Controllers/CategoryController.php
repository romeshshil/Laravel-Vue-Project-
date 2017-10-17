<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Session;

class CategoryController extends Controller
{
    
    public function index(){
    	return Category::all();
    }

    public function store(Request $request){

    	$this->validate($request,[
    			'name'=>'required'
    	]);

    	Category::create($request->all());
    }
}
