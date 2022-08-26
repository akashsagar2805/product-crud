<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
   <div class="m-4">
    <div class="card">
        <div class="card-header">
          <h1 class="m-2">Product Details</h1>
        </div>
        <div class="card-body">
          <h2 class="m-4">{{$product->title}}</h2>
          <p class="m-4">{{$product->description}}</p>
          <h6 class="m-4">{{$product->price}}</h6>

          <a href="{{url('/products')}}" class="btn btn-success btn btn-lg m-4">Go Back</a>
        </div>
      </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>
