<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Image Upload</title>
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="title" style="float:left;">
                        <h2 class="text-left">Add New Album</h2>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    <form action="{{ route('store.image') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="mb-1">Title</label>
                                    <input type="text" name="title" class="form-control" >
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1">Quote</label>
                                    <input type="text" name="excerpt" class="form-control" >
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1">Description</label>
                                    <input type="text" name="content" class="form-control" >
                                </div>



                                <div class="mb-3">
                                    <label class="mb-1">Image</label>
                                    <!-- <input type="file" name="image" class="form-control" value="{{ old('image') }}"> -->
                                    <input type="file" class="form-control" name="image" accept="jpg,jpeg,png,bmp" >
                                </div>
                               
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>