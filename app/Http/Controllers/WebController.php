<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "AccuraLens Blue Block Glasses – Protect Your Eyes from Screen Light";
        $description = "Protect your eyes from digital strain with AccuraLens Blue Block Lenses. Experience crystal-clear vision, comfort, and advanced blue light protection.";
        $canonical_url = "https://accuralens.com";
        return view('index', compact('title', 'description', 'canonical_url'));
    }

    function contact()
    {
        $title = "Contact Us - AccuraLens";
        $description = "For queries, rates, and personalized solutions, please contact Accura Lens via our Contact Page. We are here to help you!";
        $canonical_url = "https://accuralens.com";
        return view('contact', compact('title', 'description', 'canonical_url'));
    }

    public function sitemap()
    {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('robots')->header('Content-Type', 'text/plain');
    }
}
