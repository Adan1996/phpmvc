<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Mahasiswa</h1>
            <?php foreach($data["mahasiswa"] as $mhs) : ?>
                <ul>
                    <li>Nama : <?= $mhs["nama"]; ?></li>
                    <li>NPM : <?= $mhs["npm"]; ?></li>
                    <li>Email : <?= $mhs["email"]; ?></li>
                    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
                </ul>   
            <?php endforeach; ?>
        </div>
    </div>
</div>