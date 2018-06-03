<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Categories</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/app.css">
   
    <script src="js/app.js"></script>
</head>
<body>
    @if(session('ok'))
       
        <div class="alert alert-success"> {{session('ok')}}</div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                Add Categories
            </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <input type="text" name="cat_name" class ="form-control">
            <button type="submit" class="btn btn-success mt-2">Add</button>
            </blockquote>
        </div>
    </div>
    </form>
   
</body>
</html>