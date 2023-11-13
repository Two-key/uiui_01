<x-app-layout>
<head>
<meta charset="utf-8">
<title>Newinformation</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>{{$town->name}}に関する最新情報</h1>
    <ul>
        @foreach ($articles as $article)
                <li>
                    {{$article->title }}
                    {{$article->comment }}
                </li>
        @endforeach
    </ul>
</body>
</x-app-layout>