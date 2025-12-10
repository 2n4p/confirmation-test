<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $content = $request->only(['last-name', 'first-name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'kinds', 'detail']);
        return view('confirm', compact('content'));
    }

    public function thanks(Request $request)
    {
        $form = $request->all();
        User::create($form);
        return view('thanks');
    }
}
