<x-app-layout>
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
@vite('resources/css/app.css')
</head>
<body>
<h1>〇〇</h1>
<div class='posts'>
<div class='post'>
<h2 class='title'>どこの町の情報を知りたい？</h2>
<h2 class='body'>Which town do you want to learn?</h2>
<form action="{{ route('search') }}" method="get">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <input  type="text" name="search" value="{{ $search ?? '' }}" placeholder="キーワードを入力">
   <!-- 送信ボタンを用意する -->
   <input type="submit" value="Search">
</form>

@if(isset($search))
    @if(isset($towns))
        <h3>該当する町の名前:</h3>
        <ul>
            @foreach ($towns as $town)
                <a href="/{{ $town->id }}/about"><li>{{ $town->name }}</li></a>
            @endforeach
        </ul>
    @endif
@endif

</div>
</div>
</body>
</x-app-layout>
