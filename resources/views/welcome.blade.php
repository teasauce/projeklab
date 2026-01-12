@extends('layouts.app')

@section('content')
<div class="container">

    <h2>📌 Newly Added Articles</h2>
    <ul>
        @foreach ($newArticles as $article)
            <li>
                <strong>{{ $article['title'] }}</strong>
                <small>— {{ $article['date'] }}</small>
            </li>
        @endforeach
    </ul>

    <h2>📚 Newly Released Issues</h2>
    <ul>
        @foreach ($newIssues as $issue)
            <li>
                <strong>{{ $issue['title'] }}</strong>
                <small>({{ $issue['issue'] }})</small>
            </li>
        @endforeach
    </ul>

    <h2>🔥 Most Viewed Articles</h2>
    <ul>
        @foreach ($popularArticles as $article)
            <li>{{ $article }}</li>
        @endforeach
    </ul>

    <h2>📖 Browse by Subject</h2>
    <ul>
        @foreach ($subjects as $subject)
            <li>{{ $subject }}</li>
        @endforeach
    </ul>

</div>
@endsection
