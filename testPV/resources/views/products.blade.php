<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center">List Product</h1>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div id="search">
            <form action="{{ Route('product') }}" method="get">
                <input id="input" ype="search" name="name" value="{{ $name }}"
                    placeholder="Search..." />
            </form>
            <div class="note">Type & hit enter</div>
        </div>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions">
                                <img src="{{ asset($item->avatar) }}" class="card-img img-fluid" width="96"
                                    height="350" alt="">
                            </div>
                        </div>
                        <div class="card-body bg-light text-center">
                            <div class="mb-2">
                                <a href="#" class="text-muted" data-abc="true"> {{ $item->name }}</a>
                            </div>
                            <h3 class="mb-0 font-weight-semibold">{{ $item->price }} VND</h3>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                            </div>
                            <div class="text-muted mb-3">{{ $item->price }}</div>

                            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to
                                cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
