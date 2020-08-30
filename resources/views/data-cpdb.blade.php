<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Siswa</title>
     <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Tabel Calon Siswa</h2>
        <table class="table table-striped mt-4">
                <tr>
                    <td>No</td>
                    <td>Nomor PPDB</td>
                    <td>Nama Calon Siswa</td>
                    <td>Asal Sekolah</td>
                    <td>Pilihan 1</td>
                    <td>Pilihan 2</td>
                    <td>Aksi</td>
                </tr>
                @forelse($calonsiswa as $itemSiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $itemSiswa->no_ppdb}}</td>
                    <td>{{ $itemSiswa->nama}}</td>
                    <td>{{ $itemSiswa->asal_sekolah}}</td>
                    <td>{{ $itemSiswa->pilihan1}}</td>
                    <td>{{ $itemSiswa->pilihan2}}</td>
                    <td><a href="#">edit</a></td>
                </tr>
                    @empty
                        <td colspan="7">Tidak Ada Data</td>
                    @endforelse

                

            </table>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>