<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    protected $title = 'Example Table';
    protected $pages = 'pages.example.';
    protected $route = 'example.';

    public function index()
    {
        $title = $this->title;
        $route = $this->route;

        return view($this->pages . 'index', compact(
            'title',
            'route'
        ));
    }

    public function store(Request $request)
    {
        dd('test');
        $request->validate([
            'form1' => 'required|in:test,'
        ]);
    }
}
