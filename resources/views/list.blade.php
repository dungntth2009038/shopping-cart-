<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>List Product</h2>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Thumbnail</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $obj)
            <tr>
                <td>{{$obj -> name}}</td>
                <td>{{$obj -> price}}</td>
                <td><img src="{{$obj -> thumbnail}}"width="100px"></td>
                <td>
                    <a href="/add?productId={{$obj->id}}&productQuantity=1">
                        <button class="btn btn-primary">Add To Cart</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
