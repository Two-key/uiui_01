<x-app-layout>
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>{{ $selectedTownName }}の情報</h1>
<div class='towns'>
    <form action="/{{$town->id}}/towns" method="POST">
        @csrf
        <button type="submit">とうろく</button>
    </form>
</div>
<h2 class='title'>最新情報</h2>
<a href="/articles/{{ $town->id }}">view</a>
<h2 class='title'>まちのお悩み掲示板</h2>
<a href="/troubles/{{ $town->id }}">view</a>
<h2 class='title'>基本ルール</h2>
<a href="/rules/{{$town->id}}">view</a>
<h2 class='title'>お店</h2>
<a href="/shopsearch">view</a>
</body>
</x-app-layout>
