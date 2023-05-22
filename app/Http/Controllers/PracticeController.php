<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function submit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $practiceArea = $request->input('practice_area');

        // Обработка данных формы

        return redirect('/')->with('success', 'Form submitted successfully!');
    }
}

