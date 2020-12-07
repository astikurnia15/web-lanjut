<?php
namespace App\Http\Controllers;

class UtamaController extends Controller
{
    public function home()
    {
        return view("home");
    }
    public function about()
    {
        return view("about");
    }
    public function services()
    {
        return view("services");
    }
    public function portfolio()
    {
        return view("portfolio");
    }
    public function teams()
    {
        return view("teams");
    }
    public function blog()
    {
        return view("blog");
    }
    public function contact()
    {
        return view("contact");
    }




}