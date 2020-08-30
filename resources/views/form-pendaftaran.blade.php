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
            <div class="col-md-8" style="margin-left: 185px; border: 1px solid black">
                <h1 class="text-center">Form Daftar Calon Siswa</h1>
                <h2 class="text-center mb-4">SMK Taruna Bhakti</h2>

                <form action="{{ url('/calonsiswa') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="noppdb">Nomor PPDB</label>
                        <input  class="form-control @error('no_ppdb') is-invalid @enderror" type="text" name="no_ppdb" id="no_ppdb" value="{{ old('no_ppdb') }}">
                        @error('no_ppdb')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Calon Siswa</label>
                        <input  class="form-control @error('nama') is-invalid @enderror " type="text" name="nama" id="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input  class="form-control @error('asal_sekolah') is-invalid @enderror " type="text" name="asal_sekolah" id="asal_sekolah" value="{{ old('asal_sekolah') }}">
                        @error('asal_sekolah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="pilihan1">Pilihan Jurusan 1</label>
                        <select class="form-control @error('pilihan1') is-invalid @enderror " name="pilihan1" id="pilihan1">
                            <option value="{{ old('pilihan1') }}">{{ old('pilihan1') }}</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="MM">Multimedia</option>
                            <option value="TEI">Teknik Elektronika Industri</option>
                            <option value="BC">Broadcast</option>
                        </select>

                        @error('pilihan1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pilihan2">Pilihan Jurusan 2</label>
                        <select class="form-control @error('pilihan2') is-invalid @enderror " name="pilihan2" id="pilihan2">
                            <option value="{{ old('pilihan2') }}">{{ old('pilihan2') }}</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="MM">Multimedia</option>
                            <option value="TEI">Teknik Elektronika Industri</option>
                            <option value="BC">Broadcast</option>
                        </select>

                        @error('pilihan2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input  class="form-control @error('alamat') is-invalid @enderror " type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nohp">Nomor HP</label>
                        <input  class="form-control @error('no_hp') is-invalid @enderror " type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Daftar</button>

                </form>
            </div>
       </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>