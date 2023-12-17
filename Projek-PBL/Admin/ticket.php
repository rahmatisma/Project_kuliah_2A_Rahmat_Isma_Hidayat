<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_ticket
    LEFT JOIN tb_film ON tb_film.nama_film = tb_ticket.nama_film
    LEFT JOIN tb_theaters ON tb_theaters.nama_theater = tb_ticket.theater");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$select_film = mysqli_query($conn, "SELECT id_film,nama_film FROM tb_film");
$select_theater = mysqli_query($conn, "SELECT id_theater,nama_theater FROM tb_theaters")

?>


<div class="col-lg-12 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Tiket
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Tambah Tiket</button>
                </div>
            </div>
            <!-- Modal tambah ticket baru -->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form form class="needs-validation" novalidate action="../proses/proses_input_ticket.php" method="post">
                            <input type="hidden" value="<?php echo $row['id_ticket'] ?>" name="id_ticket">
                                <div class="form-group">
                                    <div class="row">
                                        <!-- Bagian Film -->
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <button type="button" class="btn btn-outline-secondary">Pilihan Film</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" id="dropdownFilm">
                                                    <?php
                                                    foreach ($select_film as $value) {
                                                        echo "<li><a class='dropdown-item'>$value[nama_film]</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                                <input type="text" class="form-control" id="Inputfilm" aria-label="Text input with segmented dropdown button" placeholder="Film" name="nama_film" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Film.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Bagian Theater -->
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <button type="button" class="btn btn-outline-secondary">Pilihan Theater</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" id="dropdownTheater">
                                                    <?php
                                                    foreach ($select_theater as $row) {
                                                        echo "<li><a class='dropdown-item'>$row[nama_theater]</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                                <input type="text" class="form-control" id="Inputtheater" aria-label="Text input with segmented dropdown button" placeholder="Theater" name="theater" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Theater.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="time" class="form-control" id="floatingInput" placeholder="Jam Tayang" name="jam_tayang" required>
                                                <label for="floatingInput">Jam Tayang</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Jam Tayang.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_ticket_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah user baru  -->

            <?php
            foreach ($result as $row) {
            ?>

                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id_ticket'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="../proses/proses_edit_ticket.php" method="post">
                                <input type="hidden" value="<?php echo $row['id_ticket'] ?>" name="id_ticket">
                                <div class="form-group">
                                    <div class="row">
                                        <!-- Bagian Film -->
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <button type="button" class="btn btn-outline-secondary">Pilihan Film</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" id="dropdownFilm" <?php echo $row['id_ticket']; ?>>
                                                    <?php
                                                    foreach ($select_film as $value) {
                                                        echo "<li><a class='dropdown-item'>$value[nama_film]</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                                <input type="text" class="form-control" id="Inputfilm" aria-label="Text input with segmented dropdown button" placeholder="Film" name="nama_film" value="<?php echo $row['nama_film'] ?>" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Film.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Bagian Theater -->
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <button type="button" class="btn btn-outline-secondary">Pilihan Theater</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" id="dropdownTheater">
                                                    <?php
                                                    foreach ($select_theater as $value) {
                                                        echo "<li><a class='dropdown-item'>$value[nama_theater]</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                                <input type="text" class="form-control" id="Inputtheater" aria-label="Text input with segmented dropdown button" placeholder="Theater" name="theater" value="<?php echo $row['nama_theater'] ?>" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Theater.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="time" class="form-control" id="floatingInput" placeholder="Jam Tayang" name="jam_tayang" value="<?php echo $row['jam_tayang'] ?>" required>
                                                <label for="floatingInput">Jam Tayang</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Jam Tayang.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_ticket_validate" value="12345">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal Edit-->

                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id_ticket'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Ticket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="../proses/proses_delete_ticket.php" method="post">
                                    <input type="hidden" value="<?php echo $row['id_ticket'] ?>" name="id_ticket">
                                    <div class="col-lg-12">
                                        <?php
                                            echo "Apakah anda yakin ingin menghapus ticket <b>$row[nama_film]</b> di theater <b>$row[theater]</b> pada jam <b>$row[jam_tayang]</b>?";
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_ticket_validate" value="12345">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal Delete-->

                <!-- Modal Reset Password-->
                <div class="modal fade" id="ModalResetPassword<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form form class="needs-validation" novalidate action="../proses/proses_reset_password.php" method="post">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="col-lg-12">
                                        <?php
                                        if ($row['username'] == $_SESSION['username_TLine']) {
                                            echo "<div class='alert alert-danger'>Anda Tidak dapat mereset password sendiri</div>";
                                        } else {
                                            echo "Apakah anda yakin ingin mereset password user <b>$row[username]</b> menjadi password bawaan sistem yaitu <b>password</b>";
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="input_user_validate" value="12345" <?php echo ($row['username'] == $_SESSION['username_TLine']) ? 'disabled' : ''; ?>>Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Reset Password-->
            <?php
            }
            ?>

            <?php
            if (empty($result)) {
                echo "Data Ticket tidak ada";
            } else {

            ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Film</th>
                                <th scope="col">Nama Theater</th>
                                <th scope="col">Jam Tayang</th>
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
                                        <?php echo $row['nama_film'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_theater'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['jam_tayang'] ?>
                                    </td>
                                    <td class="d-flex">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_ticket'] ?>"><i class="bi bi-pencil-square"></i></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_ticket'] ?>"><i class="bi bi-trash"></i></i></button>
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

<!-- Skrip JavaScript untuk pencarian otomatis -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menyaring film berdasarkan input
        document.getElementById("Inputfilm").addEventListener("input", function() {
            filterDropdown("Inputfilm", "dropdownFilm");
        });

        // Pilih film yang diklik
        document.querySelectorAll("#dropdownFilm a").forEach(function(item) {
            item.addEventListener("click", function() {
                document.getElementById("Inputfilm").value = this.textContent;
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Menyaring theater berdasarkan input
        document.getElementById("Inputtheater").addEventListener("input", function() {
            filterDropdown("Inputtheater", "dropdownTheater");
        });

        // Pilih theater yang diklik
        document.querySelectorAll("#dropdownTheater a").forEach(function(item) {
            item.addEventListener("click", function() {
                document.getElementById("Inputtheater").value = this.textContent;
            });
        });
    });

    // Fungsi untuk menyaring dropdown
    function filterDropdown(inputId, dropdownId) {
        var value = document.getElementById(inputId).value.toLowerCase();
        var dropdown = document.getElementById(dropdownId);

        // Menyaring opsi dropdown berdasarkan input
        Array.from(dropdown.children).forEach(function(item) {
            var optionText = item.textContent.toLowerCase();
            item.style.display = optionText.includes(value) ? 'block' : 'none';
        });
    }
</script>