<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = [
            [
                'name' => 'Computer Science',
                'description' => 'Algorithms, artificial intelligence, software systems, and theory.'
            ],
            [
                'name' => 'Physics',
                'description' => 'Theoretical and applied physics, materials, and mechanics.'
            ],
            [
                'name' => 'Mathematics',
                'description' => 'Pure mathematics, applied mathematics, and statistics.'
            ],
            [
                'name' => 'Economics',
                'description' => 'Microeconomics, macroeconomics, and economic policy.'
            ],
            [
                'name' => 'Philosophy',
                'description' => 'Logic, ethics, metaphysics, and philosophy of science.'
            ],
        ];

        return view('public.subjects', compact('subjects'));
    }
}
