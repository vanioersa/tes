<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="overflow: hidden;">
  <div class="d-flex">
    <div class="col-12 bg-dark" style="width: 15%;">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-5 d-none d-sm-inline">Info Selengkapnya</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
          <li>
            <a href="<?php echo base_url('keuangan') ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-house-chimney"></i> <span class="ms-1 d-none d-sm-inline">Home</span></a>
          </li>
          <li>
            <a href="<?php echo base_url('keuangan/pembayaran') ?>" class="nav-link px-0 align-middle">
              <i class="fa-solid fa-money-bills"></i> <span class="ms-1 d-none d-sm-inline">Pembayaran</span></a>
          </li>
          <li style="margin-top: 480px;">
            <a href="<?php echo base_url('auth/logout') ?>" class="nav-link px-0 align-middle">
              <span class="ms-1 d-none d-sm-inline"><i class="fa-solid fa-right-from-bracket"></i> Logout</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="">
      <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark" style="height: 50px; width: 1160px">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding: 2px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('home'); ?>">
                  <font color="white"><i class="fa-solid fa-house-user"></i> Home</font>
                </a>
              </li>
              <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
            </ul>
            <form style="margin-right: 20px;" class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="py-3 h-auto" style="margin-left: 1px;">
        <h1 style="margin-bottom: 20px; text-align: center;"><b>Pembayaran</b></h1>
        <a href="<?php echo base_url('keuangan/tambah_pembayaran') ?>"><button type="submit" class="btn btn-primary w-25" name="submit">Tambah <i class="fa-solid fa-folder-plus"></i></button></a>
        
        <a href="<?php echo base_url('keuangan/export')?>" class="btn btn-outline-secondary">Export <i class="fa-solid fa-file-arrow-down"></i></a>
        <br><br>
        <table class="table table-bordered">
          <thead class="table-primary text-center">
            <th scope="col">No</th>
            <th scope="col">Nama siswa</th>
            <th scope="col">Jenis Pembayaran</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Aksi</th>
            </tr>

          </thead>
          <tbody classs="table-grup-divider">
            <?php $no = 0;
            foreach ($pembayaran as $row) : $no++ ?>
              <tr class="text-center">
                <td><?php echo $no ?></td>
                <td><?php echo $row->nama_siswa ?></td>
                <td><?php echo $row->jenis_pembayaran ?></td>
                <td>RP. <?php echo $row->total_pembayaran ?></td>
                <td>
                  <a href="<?php echo base_url('keuangan/ubah_pembayaran/') . $row->id ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                  <button onclick="hapus(<?php echo $row->id ?>)" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <form method="post" enctype="multipart/form-data" action="<?= base_url('keuangan/import') ?>">
          <div class="modal-body">
            <input type="file" name="file">
            <input type="submit" name="import" class="btn btn-outline-success" value="import">
          </div>
        </form> 

        <script>
          function hapus(id) {
            var yes = confirm('Yakin Di Hapus?');
            if (yes == true) {
              window.location.href = "<?php echo base_url('keuangan/delete_pembayaran/') ?>" + id;
            }
          }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </div>
    </div>
  </div>
</body>

</html>