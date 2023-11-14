<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>CRUD FRAMEWORK CI3</h1>
    <h3>{ Data Mahasiswa }</h3>

    <button onclick="document.location.href='<?=base_url('Welcome/tambah') ?>'">Tmbah Mahasiswa</button>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahaiswa</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $count = 0;
         foreach ($data_mhs as $data){
            $count = $count + 1;
        ?>
        <tr>
            <td><?= $count ?></td>
            <td><?= $data->nim ?></td>
            <td><?= $data->nama ?></td>
            <td><?= $data->jurusan ?></td>
            <td>
                <a href="<?=base_url('Welcome/edit/'). $data->nim ?>">Edit</a>
                <a href="<?=base_url('Welcome/delete/'). $data->nim ?>" onclick="return confirm('yakin ingin menghapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>