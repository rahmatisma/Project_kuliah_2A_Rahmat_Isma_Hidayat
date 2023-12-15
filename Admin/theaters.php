<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_theaters");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-12 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Theater
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Tambah Theater</button>
                </div>
            </div>
            <!-- Modal tambah theater baru -->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Theater</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form form class="needs-validation" novalidate action="../proses/proses_input_theater.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="nama theater" name="nama_theater" required>
                                            <label for="floatingInput">Nama Theater</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Theater.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="kota" name="kota" required>
                                            <label for="floatingInput">Kota</label>
                                            <div class="invalid-feedback">
                                                Masukkan kota.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" required>
                                            <label for="floatingInput">No HP</label>
                                            <div class="invalid-feedback">
                                                Masukkan No HP.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Harga weekday" name="harga_weekday" required>
                                            <label for="floatingInput">Harga Weekday</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Weekday.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-6">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Harga weekend" name="harga_weekend" required>
                                            <label for="floatingInput">Harga Weekend</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Weekend.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="" style="height: 100px;" name="alamat"></textarea>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_theater_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah theater baru  -->

            <?php
            foreach ($result as $row) {
            ?>
                <!-- Modal view-->
                <div class="modal fade" id="ModalView<?php echo $row['id_theater'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data Theater</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="proses/proses_input_user.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Your name" name="nama_theater" value="<?php echo $row['nama_theater'] ?>">
                                                <label for="floatingInput">Nama Theater</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="kota" name="kota" value="<?php echo $row['kota'] ?>">
                                                <label for="floatingInput">Kota</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp'] ?>">
                                                <label for="floatingInput">No HP</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput" placeholder="Harga weekday" name="harga_weekday" value="<?php echo $row['harga_weekday'] ?>">
                                                <label for="floatingInput">Harga Weekend</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput" placeholder="Harga weekend" name="harga_weekend" value="<?php echo $row['harga_weekend'] ?>">
                                                <label for="floatingInput">Harga weekend</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-floating">
                                            <textarea disabled class="form-control" id="" style="height: 110px;" name="alamat"><?php echo $row['alamat'] ?></textarea>
                                            <label for="floatingInput">Alamat</label>
                                        </div>
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
                <div class="modal fade" id="ModalEdit<?php echo $row['id_theater'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="../proses/proses_edit_theater.php" method="post">
                                    <input type="hidden" value="<?php echo $row['id_theater'] ?>" name="id_theater">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="nama theater" name="nama_theater" required value="<?php echo $row['nama_theater'] ?>">
                                                <label for="floatingInput">Nama Theater</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Theater.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="kota" name="kota" required value="<?php echo $row['kota'] ?>">
                                                <label for="floatingInput">Kota</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Kota.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" required value="<?php echo $row['nohp'] ?>">
                                                <label for="floatingInput">No HP</label>
                                                <div class="invalid-feedback">
                                                    Masukkan No Hp.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="Harga weekday" name="harga_weekday" required value="<?php echo $row['harga_weekday'] ?>">
                                                <label for="floatingInput">Harga Weekday</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Harga Weekday.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="Harga weekend" name="harga_weekend" required value="<?php echo $row['harga_weekend'] ?>">
                                                <label for="floatingInput">Harga Weekend</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Harga Weekend.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="" style="height: 110px;" name="alamat"><?php echo $row['alamat'] ?></textarea>
                                            <label for="floatingInput">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="input_theater_validate" value="12345">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal Edit-->

                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id_theater'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Theater</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="../proses/proses_delete_theater.php" method="post">
                                    <input type="hidden" value="<?php echo $row['id_theater'] ?>" name="id_theater">
                                    <div class="col-lg-12">
                                        <?php
                                            echo "Apakah anda yakin ingin menghapus Theater <b>$row[nama_theater]</b>";
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_theater_validate" value="12345">Hapus</button>
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
                                <th scope="col">Kota</th>
                                <th scope="col">Nama Theater</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    <td>
                                        <?php echo $row['kota'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_theater'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nohp'] ?>
                                    </td>
                                    <td class="d-flex">
                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id_theater'] ?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_theater'] ?>"><i class="bi bi-pencil-square"></i></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_theater'] ?>"><i class="bi bi-trash"></i></i></button>
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