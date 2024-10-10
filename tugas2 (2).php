

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Matakuliah</title>
</head>
<body>
    <h1>Aplikasi Penilaian Mahasiswa</h1>
    <form action="" method="get">
        <table broder="0">
            <tr>
                <td>Masukkan Nilai Matakuliah 1</td>
                <td>:</td>
                <td><input type="number" name="matakuliah1"></td>
            </tr>
            <tr>
            <td>Masukkan Nilai Matakuliah 2</td>
                <td>:</td>
                <td><input type="number" name="matakuliah2"></td>
            </tr>
            <tr>
            <td>Masukkan Nilai Matakuliah 3</td>
                <td>:</td>
                <td><input type="number" name="matakuliah3"></td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" name="proses"value="Proses"></td>
            </tr>
        </table>
        </form>
        <hr>
        <?php
        $nilai1 = $_GET['matakuliah1'];
        $nilai2 = $_GET['matakuliah2'];
        $nilai3 = $_GET['matakuliah3'];
        $rata = ($nilai1 + $nilai2 + $nilai3) / 3;
        echo "Nilai Rata-rata = $rata";
        if($rata >= 60){
            $status = "Lulus";
        }else{
            $status = "Tidak Lulus";
        }
        echo "<br>Status kelulusan =$status";
        ?>
    </body>
</html>

</body>
</html>


