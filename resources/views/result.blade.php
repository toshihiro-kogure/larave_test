<html>
<head>
    <meta charset="utf-8">
    <title>Sample02</title>
</head>
<body>
    <h1>Sample02(ソート関数)</h1>
    @if($sort == 1)
        <p>順番:昇順</P>
    @else 
        <p>順番:降順</P>
    @endif

    <p>実行回数:{{$int}}回</p>

    <?php echo "実行を終えるまでの時間:".sprintf("%.20f", $time)."秒" ?><br />
    <p>〇結果</p>
    @foreach ($array as $user)
        {{$user}}
    @endforeach
    <hr>
    <form method="get" action="/">
        <input type='submit' value="戻る">
    </form>
</body>
</html>