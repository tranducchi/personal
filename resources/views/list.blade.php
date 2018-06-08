<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>List categoreis</title>
</head>
<body>
    <h3 class="dislay-3 text-center mt-3 mb-5">List cate </h3>
    <div class="list-cat">
        <table class="table custom-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $cat)

                <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->name}}</td>
                    <td>Empty</td>
                    <td>{{$cat->updated_at}}</td>
                </tr>
            @endforeach
               
            </tbody>
        </table>
        {{$data->links()}}
    </div>

</body>
</html>