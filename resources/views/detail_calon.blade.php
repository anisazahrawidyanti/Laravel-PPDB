<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa SMK Taruna Bhakti</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container bg-white pt-4">
       <div class="row">
            
            <div class="col-md-6" style="border:1px solid black; margin-left: 280px">
                <h3 class="mt-2 mb-3 text-center">Data Calon Siswa <br> {{ $calonsiswa->nama }}</h3>

                    <div class="form-group">
                        <label for="nama">Nomor PPDB : </label>
                        <div>{{ $calonsiswa->no_ppdb }}</div>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Calon Siswa : </label>
                        <div>{{ $calonsiswa->nama }}</div>
                    </div>

                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah : </label>
                        <div>{{ $calonsiswa->asal_sekolah }}</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="pilihan1">Pilihan Jurusan 1 : </label>
                        <div>{{ $calonsiswa->pilihan1 }}</div>
                    </div>

                    <div class="form-group">
                        <label for="pilihan2">Pilihan Jurusan 2 : </label>
                        <div>{{ $calonsiswa->pilihan2 }}</div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat : </label>
                        <div>{{ $calonsiswa->alamat }}</div>
                    </div>

                    <div class="form-group">
                        <label for="nohp">Nomor HP : </label>
                        <div>{{ $calonsiswa->no_hp }}</div>
                    </div>
                    
            </div>
       </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>