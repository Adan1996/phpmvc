<div class="container mt-5">

    <h1>Detail Mahasiswa</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["mahasiswa"]["nama"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["mahasiswa"]["npm"]; ?></h6>
            <p class="card-text"><?= $data["mahasiswa"]["email"]; ?></p>
            <p class="card-text"><?= $data["mahasiswa"]["jurusan"]; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">kembali</a>
        </div>
    </div>

</div>