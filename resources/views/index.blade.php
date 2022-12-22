

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraPost</title>
    {{-- import file bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">     
                     <b> LaraPost</b>
                </a>
            </div>
        </nav>
        <a href="{{url('post/create')}}" class="btn btn-flat btn-sm btn-default">Tambah Data Post</a>
        <br>
        <style>
            .pagination{
                float: right;
                margin-top: 10px;
            }
        </style>
        <div class="col-12">
            <br>

<br>
            <div class="row">
                @foreach ($post as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ substr($item->content, 0, 100) }}</p>
                            <a href="{{url('post/edit')}}/{{$item->id}}" class="btn btn-warning">Edit Post</a>
                            <a href="{{url('post/hapus')}}/{{$item->id}}" class="btn btn-danger">Hapus] Post</a>
                            <a href="{{url('post/')}}/{{$item->id}}" class="btn btn-dafault">Baca</a>
                        </div>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
       
 
 
	{{ $post->links() }}
    </div>
</body>

</html>