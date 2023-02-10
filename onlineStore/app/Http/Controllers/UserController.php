<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
        public function index()
{
$viewData = [];
$viewData["title"] =  "Users - Online Store";
$viewData["subtitle"] = "List of User";
// $viewData["products"] = ProductController::$products;
$viewData["users"] = User::all();
return view('user.index')->with("viewData", $viewData);
}
public function show($id)
{
$viewData = [];

$user = User::findOrFail($id);
$viewData["title"] = $user->getName() . " - Online Store";
$viewData["subtitle"] = $user->getName() . " -User information";

$viewData["users"] = $user;
return view('user.show')->with("viewData", $viewData);
}

}
