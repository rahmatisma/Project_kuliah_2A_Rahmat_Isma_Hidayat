<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_film");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-12 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Film
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Tambah Film</button>
                </div>
            </div>
            <!-- Modal tambah Film baru -->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Makanan dan Minuman</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="../proses/proses_input_film.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="uploadFoto" placeholder="Foto" name="foto" required>
                                            <label class="input-group-text" for="uploadFoto">Upload Foto Film</label>
                                            <div class="invalid-feedback">
                                                Masukkan File Foto Film.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama film" name="nama_film" required>
                                            <label for="floatingInput">Nama Film</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Film.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="jenis film" name="jenis_film" required>
                                            <label for="floatingInput">Jenis Film</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jenis Film.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Produser" name="produser" required>
                                            <label for="floatingInput">Produser</label>
                                            <div class="invalid-feedback">
                                                Masukkan Produser Film.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Sutradara" name="sutradara" required>
                                            <label for="floatingInput">Sutradara</label>
                                            <div class="invalid-feedback">
                                                Masukkan Sutradara Film.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Penulis" name="penulis" required>
                                            <label for="floatingInput">Penulis</label>
                                            <div class="invalid-feedback">
                                                Masukkan Penulis Film.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Produksi" name="produksi" required>
                                            <label for="floatingInput">Produksi</label>
                                            <div class="invalid-feedback">
                                                Masukkan Produksi Film.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Durasi" name="durasi" required>
                                            <label for="floatingInput">Durasi</label>
                                            <div class="invalid-feedback">
                                                Masukkan Durasi Film.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Trailer" name="trailer" required>
                                            <label for="floatingInput">Trailer</label>
                                            <div class="invalid-feedback">
                                                Masukkan Link Trailer Film.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="" style="height: 100px;" name="casts" required></textarea>
                                    <label for="floatingInput">Casts</label>
                                    <div class="invalid-feedback">
                                        Masukkan Casts Film.
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="" style="height: 100px;" name="sinopsis" required></textarea>
                                    <label for="floatingInput">sinopsis</label>
                                    <div class="invalid-feedback">
                                        Masukkan Sinopsis dari Film.
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_film_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah Film baru  -->

            <?php
            foreach ($result as $row) {
            ?>
                <!-- Modal view-->
                <div class="modal fade" id="ModalView<?php echo $row['id_film'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="../proses/proses_input_film.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Nama film" value="<?php echo $row['nama_film'] ?>" name="nama_film">
                                                <label for="floatingInput">Nama Film</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="jenis film" value="<?php echo $row['jenis_film'] ?>" name="jenis_film">
                                                <label for="floatingInput">Jenis Film</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Produser" value="<?php echo $row['produser'] ?>" name="produser">
                                                <label for="floatingInput">Produser</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Sutradara" value="<?php echo $row['sutradara'] ?>" name="sutradara">
                                                <label for="floatingInput">Sutradara</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Penulis" value="<?php echo $row['penulis'] ?>" name="penulis">
                                                <label for="floatingInput">Penulis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Produksi" value="<?php echo $row['produksi'] ?>" name="produksi">
                                                <label for="floatingInput">Produksi</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Durasi" value="<?php echo $row['durasi'] ?>" name="durasi">
                                                <label for="floatingInput">Durasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Trailer" value="<?php echo $row['trailer'] ?>" name="trailer">
                                                <label for="floatingInput">Trailer</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea disabled class="form-control" id="" style="height: 100px;" name="casts"><?php echo $row['casts'] ?></textarea>
                                        <label for="floatingInput">Casts</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea disabled class="form-control" id="" style="height: 100px;" name="sinopsis"><?php echo $row['sinopsis'] ?></textarea>
                                        <label for="floatingInput">sinopsis</label>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal View -->

                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id_film'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="../proses/proses_edit_film.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_film" value="<?php echo $row['id_film']; ?>">
                                    <input type="hidden" name="foto_lama" value="<?php echo $row['foto']; ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control py-3" id="uploadFoto" placeholder="Foto" name="foto">
                                                <label class="input-group-text" for="uploadFoto">Upload Foto Film</label>
                                                <div class="invalid-feedback">
                                                    Masukkan File Foto Film.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Nama film" value="<?php echo $row['nama_film'] ?>" name="nama_film">
                                                <label for="floatingInput">Nama Film</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Film.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="jenis film" value="<?php echo $row['jenis_film'] ?>" name="jenis_film">
                                                <label for="floatingInput">Jenis Film</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Jenis Film.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Produser" value="<?php echo $row['produser'] ?>" name="produser">
                                                <label for="floatingInput">Produser</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Produser Film.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Sutradara" value="<?php echo $row['sutradara'] ?>" name="sutradara">
                                                <label for="floatingInput">Sutradara</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Sutradara Film.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Penulis" value="<?php echo $row['penulis'] ?>" name="penulis">
                                                <label for="floatingInput">Penulis</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Penulis Film.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Produksi" value="<?php echo $row['produksi'] ?>" name="produksi">
                                                <label for="floatingInput">Produksi</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Produksi Film.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Durasi" value="<?php echo $row['durasi'] ?>" name="durasi">
                                                <label for="floatingInput">Durasi</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Durasi Film.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Trailer" value="<?php echo $row['trailer'] ?>" name="trailer">
                                                <label for="floatingInput">Trailer</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Link Trailer Film.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="" style="height: 100px;" name="casts"><?php echo $row['casts'] ?></textarea>
                                        <label for="floatingInput">Casts</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" id="" style="height: 100px;" name="sinopsis"><?php echo $row['sinopsis'] ?></textarea>
                                        <label for="floatingInput">sinopsis</label>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="input_film_validate" value="12345">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal Edit-->

                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id_film'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Film</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="../proses/proses_delete_film.php" method="post">
                                    <input type="hidden" value="<?php echo $row['id_film'] ?>" name="id_film">
                                    <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                    <div class="col-lg-12">
                                        Apakah anda ingin menghapus film <b><?php echo $row['nama_film'] ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_film_validate" value="12345">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal Delete-->

            <?php
            }
            ?>

            <?php
            if (empty($result)) {
                echo "Data user tidak ada";
            } else {

            ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar Film</th>
                                <th scope="col">Nama Film</th>
                                <th scope="col">Sutradara</th>
                                <th scope="col">Produksi</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr class="table-hover">
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    <td>
                                        <div style="width: 90px">
                                            <img src="../assets/img/film/<?php echo $row['foto'] ?>" class="img-fluid" alt="...">
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_film'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['sutradara'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['produksi'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['durasi'] ?>
                                    </td>
                                    <td class="d-flex">
                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id_film'] ?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_film'] ?>"><i class="bi bi-pencil-square"></i></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_film'] ?>"><i class="bi bi-trash"></i></i></button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>