@extends('layouts.app')

@section('content')

<div style="display: grid; grid-template-columns: 260px 1fr; gap: 30px;">

    {{-- Sidebar --}}
    <aside class="card">
        <h2>Browse</h2>

        <h3>Subjects</h3>
        <ul>
            <li><a href="#">Computer Science</a></li>
            <li><a href="#">Physics</a></li>
            <li><a href="#">Mathematics</a></li>
        </ul>

        <h3>Years</h3>
        <ul>
            <li><a href="#">2026</a></li>
            <li><a href="#">2025</a></li>
            <li><a href="#">2024</a></li>
        </ul>

        <h3>Professors</h3>
        <ul>
            <li><a href="#">Prof. Hiro Tanaka</a></li>
            <li><a href="#">Dr. Siti Rahmawati</a></li>
        </ul>
    </aside>

    {{-- Article list --}}
    <section class="card">
        <h2>Articles</h2>

        <ul>
            <li>
                <a href="#"><strong>AI‑Assisted Academic Writing</strong></a><br>
                <small>Hiro Tanaka — Journal of Computer Science (2026)</small>
            </li>

            <li>
                <a href="#"><strong>Distributed Systems in Education</strong></a><br>
                <small>Siti Rahmawati — Computing Review (2025)</small>
            </li>

            <li>
                <a href="#"><strong>Modern Research Platforms</strong></a><br>
                <small>Hiro Tanaka — Systems Journal (2025)</small>
            </li>
        </ul>
    </section>

</div>

@endsection
