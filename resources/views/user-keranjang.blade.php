<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"  rel="stylesheet">
    <style>
        body{
            background-color: #e4e4e4;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header{
            background-image: linear-gradient(to light,#6a6a6a);
            color: rgb(20, 20, 20);
            padding:40px 0;
        }
        .header-title{
            font-size: 2.5em;
            font-weight: bold;
        }
        .header-subtitle{
            font-style: italic;
            font-size: 1.2rem;
        }
        .card{
            border: none;
            margin-bottom: 20px;
            border-radius: 15px;
            transition: transfrom 0.2s,box-shadow 0.2s;
        }
        .card:hover{
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .card-header{
            background-color: #6a6a6a;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .product-image{
            max-height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-custom{
            background-color: #6a6a6a;
            border-color: white;
            color:white;
            border-radius: 50px;
            transition: background-color0.3s,transform 0.3s;
        }
        .btn-custom-hover{
            background-color: #6a6a6a;
            transform: scale(1.05);
        }
        .btn-outline-danger{
            border-radius: 50px;
            transition: background-color 0.3s,transform 0,3s;
        }
        .btn-outline-danger-hover{
            background-color: #6a6a6a;
            color: white;
            transform: scale(1.05);
        }
        footer{
            background-color: #6a6a6a;
            padding: 40px 0;
            margin-top: 40px;
            border-top: 5px solid #6a6a6a;
        }
        .footer-text{
            color:white;
            font-size: 1rem;
        }
        .highlight{
            background-color: #6a6a6a;
            padding: 10px;
            border-radius: 10px;
            font-size: 0.9rem;
            color: white;
        }
        .badge{
            font-size: 0.9rem;
            border-radius: 5px;
            padding: 5px 10px;
            background-color: #6a6a6a;
            color: white;
        }
    </style>
</head>
<body>
<form action="/keranjang">

    <header class="text-center">
        <div class="container">
            <h1 class="header-title" >keranjang belanja</h1>
        </div>
    </header>
    <!-Cart Section->
    <div class="container my-5">
        <div class="row">
            <!-Cart Items->
            <div class="col-lg-8">
                <!-Item pertama->
                <div class="card shadow-sm">
                    <div class="row 9-0 align-items-center">
                        <div class="col-md-4">
                            <img src="{{asset('foto/')}}" style="width:100px; height:60px;" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">the oridinal</h5>
                                <p class="card-text text-muted">skincare</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-primary fw-bold">Rp 50.000</span>
                                    <button class="btn btn-outline-danger btn-sm">hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-summary section->
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h4 class="mb-0">Ringkasan pemesanan</h4>
                        </div>
                         <div class="card-body">
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    subtotal
                                    <span>rp 200.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">pajak
                                    <span>rp 10.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center highlight">
                                    <strong>Total</strong>
                                    <strong>210.000</strong>
                                </li>
                            </ul >
                            <a href="/user/cekout" class="btn btn-secondary" style="margin-left: 140px;">checkout</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-footer->
            <footer class="text-center">
                <div class="container">
                    <p class="footer-text">&copy;2024 E-commerce Religius.All right reserved</p>
                </div>
            </footer>

            <!-Bootstrap JS->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</form>
</html>
