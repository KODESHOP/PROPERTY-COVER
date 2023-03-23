<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mikaland</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <style>
        @media (max-width: 740px) {
            .gambar {
                width: 100%;
            }
        }

        @media (min-width: 747px) {
            .gambar {
                width: 50%;
            }
        }
    </style>
</head>
<body>

    <div class="container-sm">

        <div class="row justify-content-md-center">
            <div class="col-sm-12 text-center">

                @if($status == 'success')

                    @foreach ($row as $item)

                        <img src="{{url(env('BASE_URL').'/storage/'.$item->image)}}"  class="gambar" alt="">
                        
                    @endforeach


                    <div class="d-flex align-items-center justify-content-center fixed-bottom">
                        <a href="{{$users->link}}" target="_blank" class="gambar btn btn-sm btn-success">
                            whatsapp kami
                        </a>
                    </div>


                @else 


                    <h1>URL NOT FOUND</h1>


                @endif

            </div>
        </div>

    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
 crossorigin="anonymous"></script>
</body>
</html>