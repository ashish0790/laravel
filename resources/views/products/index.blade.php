<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid fw-bold">
          <a class="navbar-brand text-white ps-5 fs-3" href="/">Navbar</a> 
        </div>
      </nav>

        
    <div class="container">
        <div class="text-end">
            <a class="btn btn-dark mt-4" href="/create">new products</a>
            
        </div>

     <table class="table table-hover mt-4">
      <thead>
        <tr>
          <th scope="col">number</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product )
        <tr>
          <th scope="row">{{$loop->index +1}}</th>
          <td>{{$product->name}}</td>
          <td>
            <img src="/products/{{$product->image}} " class="rounded-circle" width="50px" height="50px"/>
          </td>
          <td class="">
            <a href="product/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <a href="product/{{$product->id}}/delete" class="btn btn-danger ">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
