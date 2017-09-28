<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	echo dirname(__FILE__);
    }
    public function a()
    {
    	echo 'a';
    }
    public function show()
    {
    	echo 1;
    }
}
