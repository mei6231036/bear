<!DOCTYPE html><html lang="en">
<head>    
<title>Artilce|标题在此</title>    
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<meta http-equiv="x-ua-compatible" content="ie=edge">    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
</head>
<body>

{{-- 包含页头 --}}
@include('article.common.header')

{{-- 继承后插入的内容 --}}
@yield('content')

{{-- 包含页脚 --}}
@include('article.common.footer')

<script src="http://ajax.useso.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>