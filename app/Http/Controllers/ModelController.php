<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        return view('model', [
            'page' => 'Model'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|mimes:pkl',
        ]);

        $file = $request->file('model');
        $filePath = $file->store('model');

        return back()->with('success', 'Model berhasil diperbarui');
    }
}
