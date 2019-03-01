
@extends('admin.master.master')

@section('title')
    Update Recipe
@endsection

@section('content')

    <div style="background-color: aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div  class="col-sm-6">
                    <h3 style="text-align: center">Update Recipe</h3>
                    <br>
                    <form method="POST" action="{{route('admin.recipe_update',$recipe->id)}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <label for="name">Recipe Name:</label>
                        <input type="text" name="title" value="{{$recipe->title}}" class="form-control" placeholder="Recipe name">
                        <label for="price">Video Path:</label>
                        <input type="url" name="vpath" value="{{$recipe->videoPath}}" class="form-control"
                               placeholder="https://www.youtube.com/embed/LbT0p76IJ94">

                        <label>Ingredients</label>
                        <input type="text" name="ingredients" value="{{$recipe->ingredients}}" class="form-control" placeholder="Items included">

                        <label>Cooking Method</label>
                        <input type="text" name="cmethod" value="{{$recipe->cooking_method}}" class="form-control" placeholder="cooking method">

                        <label>Serve</label>
                        <input type="number" name="serve" value="{{$recipe->serve}}" min="1" class="form-control" placeholder="Please Enter no of Peoples">

                        <label>Cooking Time(mint)</label>
                        <input type="number" name="ctime" min="2" value="{{$recipe->cooking_time}}" class="form-control" placeholder="Please Enter Mints">

                        <label for="type of feedback">Select products:</label>

                        <select class="selectpicker" name="product_id[]" multiple>
                            @if($products->count() > 0)
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">
                                        {{$product->title}}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        <br><br>
                        <div class="col-sm-6">
                            <img id="myImageId" src="/{{$recipe->imagePath}}"  alt="categoty image">
                            <br>
                            <br>
                            <div class="form-group" id="preview">
                                <input type="file" name="imagePath" onchange="readURL(this)" class="form-control-file" >
                            </div>
                        </div>
                        <br><br><br>
                        <button type="submit" class="btn btn-success">Update Reciep</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>

    function readURL(input) {
        var preview = document.querySelector('#preview');
        var img = document.getElementById('myImageId');
        img.parentNode.removeChild(img)

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