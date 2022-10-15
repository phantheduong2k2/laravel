<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>List Product</h1>
    <div class="dis-none panel-search w-full p-t-10 p-b-15">
        <div class="bor8 dis-flex p-l-15">
            <form action="{{ Route('product') }}" method="get">
                @csrf
                <input class="mtext-107 cl2 size-114 plh2 p-r-15"  type="search"
                    name="name" placeholder="Search">
            </form>

        </div>
    </div>
    <div class="container text-center">
        <div class="row">
          <div class="col">
                <!-- Block2 -->
                @foreach ($data as $item)
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{ asset($item->avatar) }}" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                             {{ $item->name }}
                            </a>

                            <span class="stext-105 cl3">
                              {{ $item->price }}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach

          </div>
        </div>
      </div>
</body>
</html>
