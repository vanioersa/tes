<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>

<body class='min-vh-100 d-flex align-items-center'>
    <div class='card w-50 m-auto p-3 text-center'>
        <h3 class='text-center '>Tambah Pembayaran</h3>
        <form action="<?php echo base_url('keuangan/aksi_tambah_pembayaran') ?>" method="post" enctype="multipart/from-data">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <select name="nama_siswa" class="form-select">
                        <option selected> Pilih Siswa </option><?php foreach ($siswa as $data) : ?>
                            <option value="<?php echo $data->id_siswa ?>"><?php echo $data->nama_siswa ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                    <select name="jenis_pembayaran" class="form-select">
                        <option selected> Pilih Pembayaran </option>
                        <option value="jumlah pembayaran spp">Uang SPP</option>
                        <option value="pembayaran uang gedung">pembayaran Uang gedung</option>
                        <option value="pembayaran uang sragam">pembayaran Sragam</option>
                    </select>
                </div>
                <div class="mb-3 col-6" style="margin-left: 25%;">
                    <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
                    <input type="number" class="form-control" id="total_pembayaran" name="total_pembayaran">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Tambah</button>
        </form>
    </div>
</body>

</html>