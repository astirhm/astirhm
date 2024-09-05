<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color:rgb(240, 237, 237);
            color:black

        }

        header {
            background-color: #e4e4e4;
            color: rgb(19, 18, 18);
            height: 40px;
            text-align: center;
        }

        header h1 {

        }

        nav ul {
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: rgb(17, 17, 17);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            background-image: url(img/cover_w1920_h590_website-revamp_others-1903x582.jpg);
            background-size: cover;
            background-position: center;
            color: rgb(39, 20, 23);
            text-align: center;
            padding: 100px 20px;
        }

        .hero h2 {
            font-size: 48px;

        }

        .hero p {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .hero a {
            background-color: #6fb9f5;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        .hero a:hover {
            background-color: #555;
        }

        .products {
            padding: 50px 20px;

        }

        .products h2 {
            font-size: 20px;
            margin-bottom: 5px;
            margin-left: 30PX;
        }

        .product-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product {
            background-color:  #e4e4e4;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 300px;
        }

        .product img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
            display: inline-block;

        }

        .product h3 {
            font-size: 24px;
            color:black;
            margin-bottom: 10px;
        }

        .product p {
            margin-bottom: 15px;
            color:black;
        }

        .product a {
            display: inline-block;
            background-color: #c7c7c7;
            color: black;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .product a:hover {
            background-color: #e4e4e4;
        }

        .about {
            background-color: #e4e4e4;
            color: black;
            padding: 50px 20px;
            text-align: center;
        }

        .about h2 {
            font-size: 36px;

            margin-bottom: 30px;
            margin-top: 10px;
        }

        .about p {
            max-width: 800px;

            margin: 0 auto;
            font-size: 18px;
        }


        footer {
            background-color:  #e4e4e4;
            color: #1a1a1a;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .product {
                width: calc(50% - 40px);
            }

            .hero h2 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .product {
                width: calc(80% - 30px);
            }

            .hero h2 {
                font-size: 28px;
            }

            .hero p {

            }
            .bt{
                height: 100%;

            }

        }


    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background-color: #e4e4e4 color:white;">
            <ul class="nav navbar-nav">
            <li class="active"><a href="#" style=" background-color:  #e4e4e4; color:rgb(26, 24, 24)">The oridinary</a></li>
                    <li class="active"><a href="#" style="background-color:  #e4e4e4; color:rgb(26, 24, 24)">beranda</a></li>
                    <li class="active"><a href="#" style="background-color:  #e4e4e4; color:rgb(27, 26, 26)">produk</a></li>
                    <li class="active"> <a href="#"style="background-color:  #e4e4e4; color:black">tentang kami</a></li>
                    <li class="active"><a href="#" style="background-color:  #e4e4e4; color:rgb(12, 12, 12)">Search</a></li>
            </ul>
        </nav>
    </header>
    <section class="bt">
        <h5></h5>
        <img src="{{asset('foto/the ordinary.jpg')}}" alt="" style="width:1500px; height:260px;  ">
    </section>


    <section class="products" id="" >
        <h2>BESST SELLERS</h2>
        <div class="product-list">
            @foreach ($produk as $item )
            <div class="product">
                <img src="{{asset('foto/'.$item->foto)}}" alt="" style="width: 120px;">
                <p>{{$item->deskripsi}}</p>
                <h3>{{$item->harga}}</h3>
                    @csrf
                <a href="/user/shop/{{$item->id}}">Beli Sekarang</a>
                </form>
            </div>
                @endforeach
            </div>
        </section>

    <section class="about" id="">

        <h2>Tentang Kami</h2>
        <p>Kami adalah toko yang menyediakan produk skincare berkualitas tinggi untuk perawatan kulit Anda. Dengan bahan-bahan alami dan teknologi terbaru, produk kami dirancang untuk memberikan hasil terbaik bagi kesehatan dan kecantikan kulit Anda.</p>
    </section>

    <footer>
        <p>&copy; 2024 Skincare . Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
<script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
