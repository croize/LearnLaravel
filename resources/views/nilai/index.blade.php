<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="proses" method="post">
        {{ csrf_field() }}
            Nama:
            <input type="text" name="nama">
        <br>
            Nilai:
            <input type="text" name="nilai">
        <br>
        <input type="submit">
    </form>
</body>
</html>