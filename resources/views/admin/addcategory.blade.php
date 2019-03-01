@extends('admin.master.master')

@section('title')
    Add Category
@endsection

@section('content')

    <div style="background-color: aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div id="form" class="col-sm-6">
                    <h3 style="text-align: center">Add Category</h3>
                    <br>
                    <ul>
                         @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                             @endforeach
                    </ul>
                    <form method="POST" action="{{route('admin.category_store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="name">Category Name:</label>
                        <input type="text"  name="name" class="form-control">
                        <div class="col-sm-6">
                            <div class="form-group"><br>

                                <div style="margin-top: 12px" id="preview"></div>

                                <input type="file" name="imagePath" onchange="readURL(this)" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-success">Add Category</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    function readURL(input) {

        var preview = document.querySelector('#preview');

        if (input.files && input.files[0]) {
            for (var i = 0; i < input.files.length; i++) {
                readAndPreview(input.files[i],i)
            }
        }

        function readAndPreview(file,i) {


            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            }

            var reader = new FileReader();


            reader.onload = function (e) {
                var image = new Image();
                image.height = 250;
                image.width = 250;
                image.title  = file.name;
                image.src    = this.result;
                preview.appendChild(image);
            };


            reader.readAsDataURL(input.files[i]);// doesnt matter up and down

        }
    }


</script>