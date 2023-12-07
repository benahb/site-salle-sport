<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function AccueilController()
    {
        return view('accueil');
    } 

    public function CoursController()
    {
        return view('cours');
    } 

    public function tarifsController()
    {
        return view('tarifs');
    } 

    public function contactController()
    {
        return view('contact');
    } 

    public function mentionslegalesController()
    {
        return view('mentions-legales');
    } 
}
