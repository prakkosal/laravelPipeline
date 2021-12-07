<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Is Active</th>
            <th scope="col">Post</th>
            <th scope="col">Created At</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($posts as $item)
         <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->is_active}}</td>
            <td>{{$item->post}}</td>
            <td>{{$item->created_at}}</td>
          </tr>
         @endforeach 
        </tbody>
      </table>
       {!! $posts->appends(request()->input())->links() !!}
</body>
</html>
<!-- JavaScript Bundle with Popper -->
