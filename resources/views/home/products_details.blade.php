<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="/home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/home/css/responsive.css" rel="stylesheet" />
</head>


<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- Product Detail Start Here -->

        <div class="col-sm-6 col-md-4 col-lg-4" style="width:50%;margin:auto">
            <div class="box">

                @if ($product->image != null)
                <div class="img-box">
                    <img style="padding:20px" src="<?php echo url('images/' . $product->image); ?>">
                    {{-- <img src="home/famms-1.0.0/images/p1.png" alt=""> --}}
                </div>
                @endif
                <div class="detail-box">
                    @if ($product->title != null)

                    <h5> Detail<br />
                        {{ $product->title }}
                    </h5>
                    @endif

                    @if ($product->price != null)
                    <h6 style="color:red;text-decoration:line-through">Price :<br />
                        {{ $product->price }}
                    </h6>
                    @endif
                    @if ($product->discount_price != null)
                    <h6 style="color:blue">Discount Price:<br>
                        {{ $product->discount_price }}
                    </h6>
                    @endif
                    @if ($product->category != null)
                    <h6 style="color:blueviolet">Category:<br>
                        {{ $category->category_name }}
                    </h6>
                    @endif
                    @if ($product->description != null)
                    <h6 style="color:blueviolet">Description:<br>
                        {{ $product->description }}
                    </h6>
                    @endif

                    @if ($product->quantity != null)
                    <h6 style="color:blueviolet">Quantity:<br>
                        {{ $product->quantity }}
                    </h6>
                    @endif

                    <a href="/addtocart"><button type="button" class="btn btn-primary">Add to Cart</button></a>
                </div>




            </div>
        </div>

        <!-- Product Detail End Here -->

        <!-- footer start -->
        <footer>
            @include('home.footer')
        </footer>
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

                Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="/home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="/home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="/home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="/home/js/custom.js"></script>
</body>

</html>