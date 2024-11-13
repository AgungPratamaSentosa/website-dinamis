<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Game - Agung Shop</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Daftar Game untuk Top Up</h1>
        
        <!-- Search Box di Luar DataTables -->
        <div class="mb-4">
            <label for="searchInput" class="form-label">Cari Game:</label>
            <input type="text" id="searchInput" class="form-control" placeholder="Masukkan nama game...">
        </div>

        <table id="gameList" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Game</th>
                    <th>Jenis Top Up</th>
                    <th>Lokasi Server</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mobile Legends</td>
                    <td>Diamond</td>
                    <td>Asia Tenggara</td>
                    <td>Rp 10.000 - Rp 1.000.000</td>
                </tr>
                <tr>
                    <td>Free Fire</td>
                    <td>Diamond</td>
                    <td>Indonesia</td>
                    <td>Rp 5.000 - Rp 500.000</td>
                </tr>
                <tr>
                    <td>Genshin Impact</td>
                    <td>Crystal</td>
                    <td>Global</td>
                    <td>Rp 20.000 - Rp 2.000.000</td>
                </tr>
                <tr>
                    <td>Valorant</td>
                    <td>Valorant Points</td>
                    <td>Global</td>
                    <td>Rp 25.000 - Rp 1.500.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nama Game</th>
                    <th>Jenis Top Up</th>
                    <th>Lokasi Server</th>
                    <th>Harga</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTables
            var table = $('#gameList').DataTable();

            // Event pencarian khusus di luar DataTables
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
</body>
</html>
