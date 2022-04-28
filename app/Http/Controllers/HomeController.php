<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Job;
use App\Models\Daftar;

class HomeController extends Controller
{
    protected $title = 'Dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = $this->title;

        $totalUser = Daftar::count();
        $emailQueue = Job::count();

        return view('home', compact(
            'title',
            'totalUser',
            'emailQueue'
        ));
    }
}
