<x-app-layout>
<head>
<meta charset="utf-8">
<title>shopsearch</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

<h2 class='title'>どこのお店の情報を知りたい？</h2>
<h2 class='body'>Which shops do you want to learn?</h2>
<form action="{{ route('shopsearch') }}" method="get">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <input  type="text" name="shopsearch" value="{{ $shopsearch ?? '' }}" placeholder="キーワードを入力">
   <!-- 送信ボタンを用意する -->
   <input type="submit" value="Search">
</form>

@if(isset($shopsearch))
    @if(isset($shops))
        <h3>該当するお店の名前:</h3>
        <ul>
            @foreach ($shops as $shop)
                <a href="/{{ $shop->id }}/shops"><li>{{ $shop->name }}</li></a>
            @endforeach
        </ul>
    @endif
@endif

<form action="{{ route('categorysearch') }}" method="GET">
    @csrf
    <h2 class="mx-auto text-2xl mt-14 mb-4">気になるカテゴリーを選んで探してみよう！</h2>
    <div class="pl-20 mt-5">
<div class="pl-20 mt-5">
    <select name="shop[category_id]">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    <button class="bg-indigo-950 hover:bg-indigo-700 text-yellow-400 rounded w-20 h-10" type="submit">探す</button>
</div>
</form>

</body>
</x-app-layout>