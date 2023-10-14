<x-app-layout>
<head>
<meta charset="utf-8">
<title>Blog</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>〇〇</h1>
<div class='posts'>
<div class='post'>
<h2 class='title'>どこの町の情報を知りたい？</h2>
<h2 class='body'>Which town do you want to learn?</h2>
<form action="home.blade.php" method="post">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <input  type="text" name="input" value="{{request('search')}}" placeholder="キーワードを入力">
   <!-- 送信ボタンを用意する -->
   <input type="submit" name="search" value="Search">
   @foreach ($towns as $town)
{{ $town->t_name }}
@endforeach
</form>
</div>
</div>
</body>
</x-app-layout>