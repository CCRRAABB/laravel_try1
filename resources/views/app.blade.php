<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- �� Bootstrap ���� CSS �ļ� -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" />


</head>
<body>

@yield('content')

@include('partials.flash')
        <!-- jQuery�ļ��������bootstrap.min.js ֮ǰ���� -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- ���µ� Bootstrap ���� JavaScript �ļ� -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
@yield('footer')
<script>
    $('div.alert').delay(3000).slideUp(300);
</script>
</body>
</html>
