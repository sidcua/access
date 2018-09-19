<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function home(){
        $type = Auth::user()->type;
        if($type == 2){
            $view = view('users.admin.home');
        }
        else if($type == 3){
            $view = view('users.personnel.home');
        }
        return $view;
    }
    public function pds(){
        return view('users.personnel.pds.pds');
    }
    public function accounts(){
        return view('users.admin.accounts.accounts');
    }
    public function register(){
        return view('auth.register');
    }
}
