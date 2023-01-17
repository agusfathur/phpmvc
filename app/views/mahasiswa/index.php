<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="co-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#forModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="co-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item"
                    ><?= $mhs['nama']; ?>
                    <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('Yakin deck?')">Hapus</a>
                    <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                    <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-2">Detail</a>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="JudulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" id="ubahDataForm">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">  
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">  
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">  
                    </div>
                    <div class="mb3">
                        <label for="prodi">Prodi</label>
                        <select class="form-select" aria-label="Default select example" name="prodi" for="prodi">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="pgsd">PGSD</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary tombolSubmit">Tambah Data</button>
                </form> 
            </div>
        </div>
    </div>
</div>