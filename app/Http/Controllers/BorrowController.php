<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BorrowController extends Controller
{
    public function index(){

        return view('borrow.index');
    }


}
