<div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <?= Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="cari mahasiswa..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
              </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <ul class="list-group">
            <?php foreach($data["mahasiswa"] as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs["nama"]; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin menghapus data ini ?');">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"]; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs["id"]; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge badge-primary float-right ml-1">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>   
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="number" class="form-control" id="npm" name="npm">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>