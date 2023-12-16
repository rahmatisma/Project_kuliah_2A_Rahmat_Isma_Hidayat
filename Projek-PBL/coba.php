<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input dengan Dropdown Pencarian</title>
    <!-- Tambahkan Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col d-flex justify-content-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> Tambah Tiket</button>
        </div>
    </div>
    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form form class="needs-validation" novalidate action="../proses/proses_input_user.php" method="post">
                        <div class="form-group">
                            <label for="kotaInput">Pilih Kota:</label>
                            <div class="input-group mb-3">
                                <button type="button" class="btn btn-outline-secondary">Action</button>
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                                <input type="text" class="form-control" id="kotaInput" aria-label="Text input with segmented dropdown button" placeholder="Ketik untuk mencari kota">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="form-group">
            <label for="kotaInput">Pilih Kota:</label>
            <div class="input-group mb-3">
                <button type="button" class="btn btn-outline-secondary">Action</button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control" id="kotaInput" aria-label="Text input with segmented dropdown button" placeholder="Ketik untuk mencari kota">
            </div>
        </div>
    </div>

    <!-- Skrip JavaScript untuk pencarian otomatis -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Saring kota berdasarkan input
            document.getElementById("kotaInput").addEventListener("input", function() {
                var value = this.value.toLowerCase();
                document.querySelectorAll(".dropdown-menu a").forEach(function(item) {
                    item.style.display = item.textContent.toLowerCase().includes(value) ? 'block' : 'none';
                });
            });

            // Pilih kota yang diklik
            document.querySelectorAll(".dropdown-menu a").forEach(function(item) {
                item.addEventListener("click", function() {
                    document.getElementById("kotaInput").value = this.textContent;
                });
            });
        });
    </script>

</body>

</html>