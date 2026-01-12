<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'newArticles' => [
                ['title' => 'Innovative AI Techniques in Education', 'date' => '2026-01-09'],
                ['title' => 'Climate Change Impact on Agriculture', 'date' => '2026-01-07'],
                ['title' => 'Advances in Quantum Computing', 'date' => '2026-01-06'],
                ['title' => 'Behavioral Economics and Policy', 'date' => '2026-01-05'],
            ],

            'newIssues' => [
                ['title' => 'Journal of Computer Science', 'issue' => 'Vol. 15 No. 1'],
                ['title' => 'Environmental Studies Today', 'issue' => 'Vol. 8 No. 3'],
                ['title' => 'Modern Physics Letters', 'issue' => 'Vol. 30 No. 2'],
            ],

            'popularArticles' => [
                'Deep Learning Approaches',
                'Sustainable Energy Strategies',
                'Nanotechnology in Medicine',
                'Economic Growth Post Pandemic',
            ],

            'subjects' => [
                'Mathematics',
                'Physics',
                'Chemistry',
                'Biology',
                'Engineering',
                'Health & Medicine',
                'Social Sciences',
                'Humanities',
                'Computer Science',
            ],

            'professors' => [
            [
                'name' => 'Prof. Hiroshi Tanaka',
                'department' => 'Computer Science',
                'research' => 'Artificial Intelligence, Machine Learning'
            ],
            [
                'name' => 'Prof. Keiko Yamamoto',
                'department' => 'Environmental Studies',
                'research' => 'Climate Change, Sustainability'
            ],
            [
                'name' => 'Prof. Masaru Suzuki',
                'department' => 'Physics',
                'research' => 'Quantum Mechanics'
            ],
            [
                'name' => 'Prof. Ayumi Nakamura',
                'department' => 'Economics',
                'research' => 'Behavioral Economics'
            ],
        ],
        ]);
    }
}
