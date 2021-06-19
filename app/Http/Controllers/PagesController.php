<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use Illuminate\Http\Request;
  
class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function input()
    {
        return view('input');
    }
    public function laporan()
    {
        return view('laporan');
    }
}