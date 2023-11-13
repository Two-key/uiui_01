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
    
<h2 class='title'>その他</h2>
<h2 class='body'>Other information?</h2>
<form action="{{ route('articlesearch') }}" method="get">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <input  type="text" name="articlesearch" value="{{ $articlesearch ?? '' }}" placeholder="キーワードを入力">
   <!-- 送信ボタンを用意する -->
   <input type="submit" value="検索">
</form>

@if(isset($articlesearch))
    @if(isset($articles))
        <h3>該当する記事:</h3>
        <ul>
            @foreach ($articles as $article)
                <li>
                    {{$article->title }}
                    {{$article->comment }}
                </li>
            @endforeach
        </ul>
    @endif
@endif
</body>
</x-app-layout>