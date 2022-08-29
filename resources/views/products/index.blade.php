<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet">
</head>

<body>
    <div class="card-body m-4">
        <h1 class="">
            Products List
            <a href="/products/create" class="btn btn-success">Add Product</a>
        </h1>

        <table class="table table-striped mt-4 text-justify">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($products as $product)
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td >
                        <a href="{{url('/products/' . $product->id)}}" class="btn btn-info me-2">View</a>
                        <a href="{{url('/products/'.$product->id.'/edit')}}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{url('/products/' . $product->id)}}" method="post" style="display: inline" onclick="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                     </td>


                </tr>
                @endforeach


        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
        < /body> < /
        html >
