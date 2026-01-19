@extends('layouts.app')

@section('content')

<h2>About This Platform</h2>

<div class="card">
    <p>
        The Academic Article Platform is a web-based system designed to present
        published academic articles authored by faculty members across various
        disciplines.
    </p>

    <p>
        The platform allows users to explore research content in a structured
        and accessible manner, organized by subject areas and academic staff.
        Each professor maintains a collection of published works that users
        may view through their profile.
    </p>
</div>

<div class="card">
    <h3>Purpose</h3>
    <p>
        The primary goal of this platform is to demonstrate a structured approach
        to organizing and presenting academic publications in a digital format.
        It emphasizes clarity, accessibility, and separation of content by
        subject and author.
    </p>
</div>

<div class="card">
    <h3>How It Works</h3>
    <ul>
        <li>Users may browse articles by subject or faculty member.</li>
        <li>Each professor has a dedicated page listing their publications.</li>
        <li>Articles are displayed with publication dates and relevant metadata.</li>
        <li>Administrative users are able to manage and publish content.</li>
    </ul>
</div>

<div class="card">
    <h3>Project Disclaimer</h3>
    <p class="muted">
        This platform is a demonstration project created for academic purposes.
        All content displayed is placeholder data and does not represent real
        publications or faculty members.
    </p>
</div>

@endsection
