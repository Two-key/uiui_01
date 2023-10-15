<x-app-layout>
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>お店</h1>
<h2>shop</h2>

<!-- {{ $town->t_name }} -->
<ul>
    @foreach ($shops as $shop)
        <li>{{ $shop->name }}</li>
    @endforeach
</ul>
</body>
</x-app-layout>