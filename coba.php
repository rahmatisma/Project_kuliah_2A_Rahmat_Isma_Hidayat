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

    <!-- Tambahkan Bootstrap 5 JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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