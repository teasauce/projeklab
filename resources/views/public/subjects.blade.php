@extends('layouts.app')

@section('content')

<h2>Subjects</h2>

<div style="
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 24px;
">

    <div class="card">
        <h3>Computer Science</h3>
        <p class="muted">
            Algorithms, artificial intelligence, software systems, and theory.
        </p>
        <a href="#" class="subject-link">View articles →</a>
    </div>

    <div class="card">
        <h3>Physics</h3>
        <p class="muted">
            Theoretical and applied physics, materials, and mechanics.
        </p>
        <a href="#" class="subject-link">View articles →</a>
    </div>

    <div class="card">
        <h3>Mathematics</h3>
        <p class="muted">
            Pure mathematics, applied mathematics, and statistics.
        </p>
        <a href="#" class="subject-link">View articles →</a>
    </div>

    <div class="card">
        <h3>Economics</h3>
        <p class="muted">
            Microeconomics, macroeconomics, and economic policy.
        </p>
        <a href="#" class="subject-link">View articles →</a>
    </div>

</div>

@endsection
