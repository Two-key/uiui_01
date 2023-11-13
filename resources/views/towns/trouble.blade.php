<x-app-layout>
<head>
<meta charset="utf-8">
<title>Trouble</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>{{$town->name}}に関するお悩み掲示板</h1>
    <ul>
        @foreach ($troubles as $trouble)
                <li>
                    {{$trouble->title }}
                    {{$trouble->comment }}
                </li>
        @endforeach
    </ul>
    
<h2 class='title'>その他</h2>
<h2 class='body'>Other trouble?</h2>
<form action="{{ route('troublesearch') }}" method="get">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <input  type="text" name="troublesearch" value="{{ $troublesearch ?? '' }}" placeholder="キーワードを入力">
   <!-- 送信ボタンを用意する -->
   <input type="submit" value="検索">
</form>

@if(isset($troublesearch))
    @if(isset($troubles))
        <h3>該当する記事:</h3>
        <ul>
            @foreach ($troubles as $trouble)
                <li>
                    {{$trouble->title }}
                    {{$trouble->comment }}
                </li>
            @endforeach
        </ul>
    @endif
@endif
</body>
</x-app-layout>