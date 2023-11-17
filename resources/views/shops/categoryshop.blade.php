<x-app-layout>
<head>
<meta charset="utf-8">
<title>shop</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>{{$category->category_name}}に関するお店一覧</h1>
    <ul>
        @foreach ($shops as $shop)
                <li>
                    {{$shop->name }}
                </li>
        @endforeach
    </ul>
</body>
</x-app-layout>