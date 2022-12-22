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
                        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30"
                            alt="">
                        <b> LaraPost</b>
                    </a>
                </div>
            </nav>
            <br>
            <a href="{{ url('/post') }}" class="btn btn-flat btn-sm btn-success" >Kembali Ke Artikel</a>
            <br>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Artikel : {{ $post->title }}
                    </div>
                    <div class="card-body">
                        <h2> {{ $post->title }} </h2>
                         <body>

                        <p>{{ $post->content }} </p>
                         </body>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>