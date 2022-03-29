<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Rekap Medis ShopeeHealth </title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font-Style --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body style="font-family: Roboto Slab; color:white; background-color: white ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <p style="text-align: center"><img src="/img/shopee-logo.png" alt="Logo Shopee" width="200px"></p>
                        <h3 class="text-center" style="font-weight: bold">Formulir Rekap Medis ShopeeHealth </h3>
                        <br/>
                        <!-- form validasi -->
                        <form action="/hasil" method="post" enctype="multipart/form-data" style="font-size: 1.2em">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="@error('dokter') is-invalid @enderror">Dokter</label>
                                @error ('dokter')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <select name="dokter" id="dokter">
                                    <option>--Pilih--</option>
                                    <option>Dokter Budi</option>
                                    <option>Dokter Sulaiman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="@error('pasien') is-invalid @enderror">Pasien</label>
                                @error ('pasien')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <select name="pasien" id="pasien">
                                    <option>--Pilih--</option>
                                    <option>Ahmad Mael</option>
                                    <option>Elbert Wijaya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kondisi_kesehatan">Kondisi Kesehatan</label>
                                <input class="form-control" type="text" name="kondisi_kesehatan" value="{{ old('kondisi_kesehatan') }}" class="@error('kondisi_kesehatan') is-invalid @enderror">
                                @error('kondisi_kesehatan')
                                   <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                            </div>
                            <div class="form-group">
                                <label for="suhu_tubuh">Suhu Tubuh (C)</label>
                                <input class="form-control" type="text" name="suhu_tubuh" value="{{ old('suhu_tubuh') }}" class="@error('suhu_tubuh') is-invalid @enderror">
                                 @error('suhu_tubuh')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Resep</label>
                                <input class="form-control-file" type="file" id="resep" name="resep" accept="image/png, image/jpg, image/jpeg" class="@error('ktp') is-invalid @enderror">
                                @error('resep')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: center">
                                <input class="btn btn-primary" type="submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>