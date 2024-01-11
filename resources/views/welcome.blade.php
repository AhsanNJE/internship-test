<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a{
            color: white;
        }
        .Head{
            height: 100px;
        }
        .gg{
            margin-top: 35px;
        }

    </style>
</head>

<body>
    <div class="container card p-3">
        <div class="Head row bg-primary text-light text-center rounded">

            <h3 class="gg">Start 3:35 To End 10:00 pm</h3>

        </div>
        <div class="row mt-2">
            <div class="col-3 bg-primary text-light rounded">
                <h4  style="margin-top: 100%;">
                I am interested in obtaining a web development position, in a challenging environment that focuses on R &D , best practices, web application development, So allow me to study bleeding-edge technologies-looking for a challenging position to build up my successful career in web development in Bangladesh.
                </h4>
            </div>
            <div class="col-9 text-center">
                <div class="row px-1">
                    <div class="col-12">
                        <div class="row p-2">
                            @foreach($posts as $post)
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ (!empty($post->image)) ? url('/',$post->image) : url('
                                        /no_image.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ ($post->title) ? Str::limit($post->title, 30) : '' }}</h5>
                                        <p class="card-text">{{ ($post->description) ? Str::limit($post->description, 90) : '' }}</p>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <footer class="col-12 bg-primary text-light rounded p-2">
                        <h2>Here My Github Link</h2>
                        <a href="https://github.com/AhsanNJE">Click Here @GithubAccount</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>