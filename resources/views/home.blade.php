<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Midtrans 2023</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="my-3">Toko FWM</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/fwm.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">FWM Creamy Foundation</h5>
                <p class="card-text">Creamy foundation by dr. Netha Glow Expert</p>
                <form action="/checkout" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="qty" class="form-label">Masukkan Jumlah Orderan</label>
                        <input type="number" name="qty" class="form-control" id="qty"
                            aria-describedby="emailHelp" placeholder="Jumlah yang dipesan">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Konsumen</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="Masukkan nama">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No HP</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            aria-describedby="emailHelp" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea name="address" class="form-control" id="address" placeholder="Masukkan alamat" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Order</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
