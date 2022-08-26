<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="m-4">Edit Products</h1>

        <div class="card m-4">

            <div class="card-body">
                <form action="{{ url('/products/'.$product->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fs-4">Product Title</label>
                        <input type="text" class="form-control" name="title" value="{{$product->title}}" placeholder="Enter Title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <label class="form-label fs-4">Product Description</label>
                        <textarea class="form-control" name="description" value="" placeholder="Enter description">{{$product->description}}
                        </textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror <br>
                        <label class="form-label fs-4">Product Price</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Enter Price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
        < /body>

        <
        /html>
