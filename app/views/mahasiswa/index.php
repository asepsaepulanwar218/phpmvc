<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formMahasiswa">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action= "<?= BASEURL; ?>/mahasiswa/cari" method= "post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Data Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger text-decoration-none float-end  me-1" type="button" onclick="return confirm('yakin!')">hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-success text-decoration-none float-end me-1 tampilModalUbah" type="button" data-bs-toggle="modal" data-bs-target="#formMahasiswa" data-id="<?= $mhs['id']; ?>">ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary text-decoration-none float-end me-1" type="button">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="formMahasiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formMahasiswaLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action = "<?= BASEURL; ?>/mahasiswa/tambah" method= "post">
                <input type="hidden" name="id" id="id">
                <div class="modal-body"><div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <label for="nim" class="form-label">Nim</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <div class="input-group">
                        <select class="form-select" id="jurusan" name="jurusan">
                            <option selected>Pilih Jurusan ...</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Agroteknologi">Agroteknologi</option>
                        </select>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>