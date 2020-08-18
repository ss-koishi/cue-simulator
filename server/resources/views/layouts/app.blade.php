<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Recording Simulator</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/offcanvas.css">
    <link rel="stylesheet" href="/css/cue.css">
<body>
    @include('inc.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright 2020 &copy; @toho_cake, @ryo_628 </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <script src="/js/offcanvas.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/cue.js"></script>
</body>
</html>
