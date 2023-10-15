<x-app-layout>
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>まちの情報を追加</h1>
<h2>add information</h2>

<form action="" method="get">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <h2 class='title'>まちの名前</h2>
   <input  type="text" name="new_t_name" id="new_t_name">
   <h2 class='title'>住所</h2>
   <input  type="text" name="new_t_address" name="new_t_address"><br>
   <button type="submit">とうろく</button>
</form>

<!-- <div class='towns'>
    <form action="" method="POST">
        @csrf
        <button type="submit">とうろく</button>
    </form>
</div> -->
</body>
</x-app-layout>
