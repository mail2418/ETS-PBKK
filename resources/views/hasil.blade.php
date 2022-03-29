<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Formulir Rekap Medis ShopeeHealth </title>
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
                        <h3 class="text-center" style="font-weight: bold">Register Formulir Rekap Medis ShopeeHealth Completed</h3>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Dokter</td>
                                <td>{{ $data->dokter }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Pasien</td>
                                <td>{{ $data->pasien }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Kondisi Kesehatan</td>
                                <td>{{ $data->kondisi_kesehatan }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Suhu Tubuh</td>
                                <td>{{ $data->suhu_tubuh }} C</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Resep</td>
                                <td><img src="{{$data->resep}}" alt="resep" width="250px"></td>
                            </tr>
                        </table>
                        <p style="text-align: center">
                            <a href="/formulir" class="btn btn-primary">Kembali ke Formulir</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('sweetalert::alert')
</html> 