<x-app-layout>
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<h1>基本ルール</h1>
<h2>Rule</h2>
    <ul>
        @foreach ($rules as $rule)
                <li>
                    {{ $rule->title }}
                    {{ $rule->comment }}
                </li>
            </a>
        @endforeach
    </ul>
</body>
</x-app-layout>