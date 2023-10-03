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

      @if($message= Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{$message}}</strong>
        </div>
        @endif
        
    <div class="container">
     <h1> New products</h1>
     <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="POST" action="/product/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>description</label>
                        <textarea class="form-control mt-2" rows="4" name='description'>{{old('description')}}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label>image</label>
                        <input type="file" name="image" class="form-control"/>
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    
                    </div>
                    
                   <button type="submit" class="btn btn-dark mt-4">submit</button>
                </form>


            </div>
           
        </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>