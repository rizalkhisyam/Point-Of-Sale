<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/all.css')}}">
    <title>Qhuy</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{url('image/beranda_K/Icon material-dashboard.png')}}" alt="">
        </a>
        <a href="navbar-brand" id="nav2">
            <img src="{{url('image/beranda_K/Ellipse 1.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>

    <div class="content-pos">
    <div class="container">

        <div class="row">
            <div class="col-6">
                <form>
                    <input class="form-control form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>All Product..</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>


            <div class="produk">
            <div class="row">
            <div class="col-4">
                <figure class="figure text-center prod-1">
                    <div class="figure-img">
                        <img src="{{url('image/beranda_K/kaws.jpg')}}" class="figure-img img-fluid ">
                        <a href="" class="d-flex justify-content-center">
                            <img src="{{url('image/beranda_K/Group 21.png')}}" class="align-self-center">
                        </a>
                    </div>
                    <figcaption class="figure-caption">
                        <p id="p">Uniqlo X Kaws</p>
                        <p>Rp.120.000</p>
                        <button class="btn btn-success">Add To Cart</button>
                    </figcaption>
                </figure>
            </div>
            <div class="col-4">
                <figure class="figure text-center prod-1">
                    <div class="figure-img">
                        <img src="{{url('image/beranda_K/kaws.jpg')}}" class="figure-img img-fluid ">
                        <a href="" class="d-flex justify-content-center">
                            <img src="{{url('image/beranda_K/Group 21.png')}}" class="align-self-center">
                        </a>
                    </div>
                    <figcaption class="figure-caption">
                        <p id="p">Uniqlo X Kaws</p>
                        <p>Rp.120.000</p>
                        <button class="btn btn-success">Add To Cart</button>
                    </figcaption>
                </figure>
            </div>
            <div class="col-4">
                <figure class="figure text-center prod-1">
                    <div class="figure-img">
                        <img src="{{url('image/beranda_K/kaws.jpg')}}" class="figure-img img-fluid ">
                        <a href="" class="d-flex justify-content-center">
                            <img src="{{url('image/beranda_K/Group 21.png')}}" class="align-self-center">
                        </a>
                    </div>
                    <figcaption class="figure-caption">
                        <p id="p">Uniqlo X Kaws</p>
                        <p>Rp.120.000</p>
                        <button class="btn btn-success">Add To Cart</button>
                    </figcaption>
                </figure>
                </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Quantity</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href=""><i class="far fa-trash-alt"></i></a></th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href=""><i class="far fa-trash-alt"></i></a></th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href=""><i class="far fa-trash-alt"></i></a></th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="tot mt-5">
                <hr>
                <h3>Total</h3>
                <hr>
            </div>

            <div class="">
                <a href="" class="btn btn-danger mt-3 text-white"><i class="far fa-trash-alt"></i></a>
                <a href="" class="btn btn-info mt-3 text-white"><i class="fas fa-save"></i></a>
                <a href="" class="btn btn-success mt-3 text-white col-10">Pay</a>
                
            </div>
            <div class="save">
                
            </div>
            
        </div>
    </div>
</div>
    </div>
    </div>

<script src="{{url('assets/js/all.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
