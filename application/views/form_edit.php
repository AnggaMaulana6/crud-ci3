<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    
    <table>
        <form action="<?=base_url('Welcome/update') ?>" method="post">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>
                <input type="text" id="" value="<?=$data_mhs->nim ?>" disabled>
                <input type="hidden" name="nim" value="<?=$data_mhs->nim ?>">
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" id="" value="<?=$data_mhs->nama ?>" required></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="" value="<?=$data_mhs->jurusan ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td colspan=""><input type="submit" name="" value="Simpan" id=""><a href="<?=base_url('Welcome/index') ?>">Kembali</a></td>
            <!-- <td colspan=""><center><a href="<?=base_url('Welcome/index') ?>">Kembali</a></center></td> -->
        </tr>
        </form>
    </table>

</body>
</html>