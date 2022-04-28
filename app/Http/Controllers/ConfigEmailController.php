<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\ConfigEmail;

class ConfigEmailController extends Controller
{
    protected $route = 'config-email.';
    protected $view  = 'pages.config-emails.';
    protected $title = 'Config Email';

    public function index()
    {
        $title = $this->title;
        $route = $this->route;

        $data = ConfigEmail::select('from', 'subject', 'body', 'id')->first();

        return view($this->view . 'index', compact(
            'route',
            'title',
            'data'
        ));
    }

    public function edit($id)
    {
        $title = $this->title;
        $route = $this->route;

        $data = ConfigEmail::select('from', 'subject', 'body', 'id')->first();

        return view($this->view . 'edit', compact(
            'route',
            'title',
            'data'
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'from' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        $input = $request->all();
        $data = ConfigEmail::find($id);
        $data->update($input);

        return redirect()
            ->route($this->route . 'index')
            ->withSuccess('Selamat! Data berhasil diperbaharui.');
    }
}
