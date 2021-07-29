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
<div class="col-12">
    <div class="text-center m-5">
        <h1>Shopping Cart</h1>
        <form action="/create" method="post">
            @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="name" placeholder="name">
                </div>
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="price" placeholder="price">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="text" name="thumbnail" placeholder="thumbnail">
                </div>
            </div>
            <div class="form-group text-center">
                <button class=" btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
