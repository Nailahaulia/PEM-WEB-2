<!DOCTYPE html>
<html>
    <head>
    <title>Selamat Belajar PHP</title>
    </head>
<body>
    <h3>Selamat Belajar PHP</h3>
    <?php
        $_nama = "Nailah Aulia";
        $_umur = 20;
        $_berat = 60.5;
        $_prodi = "Sistem Informasi";
        $_kampus = "STT-NF";
        echo "Hello,selamat datang di PHP";
    ?>
    <hr>
    <?php
        echo "nama saya $_nama. Saya umur $_umur tahun";
        echo "<br>dengan berat badan $_berat kg";
        echo "<br>saya sedang menempuh pendidikan di prodi $_prodi";
    ?>
    <br>di kampus <?=$_kampus?>
</body>
</html>