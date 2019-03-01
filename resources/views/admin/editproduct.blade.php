@extends('admin.master.master')

@section('title')
    Edit Product
@endsection

@section('content')

    <div style="background-color: aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div  class="col-sm-6">
                    <h3 style="text-align: center"> Edit product</h3>
                    <br>
                    <form method="POST" action="{{route('admin.product_update',$products->id)}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <label for="name">Product Name:</label>
                        <input type="text" name="title" value="{{$products->title}}" class="form-control">

                        <label for="price">Product Price:(Rs)</label>
                        <input type="text" name="price" value="{{$products->price}}" class="form-control">

                        <label>Discount:(Rs)</label>
                        <input type="text" name="discount" value="{{$products->discount}}" class="form-control">

                        <label for="type of feedback">Select Category:</label>
                        <select class="form-control"  name="category_id">

                            @if($categories->count() > 0)
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                    @if(!is_null($category->id))
                                        {{'selected'}}
                                            @endif
                                    >{{$category->name}}
                                    </option>
                                @endforeach
                            @endif
                        </select>

                        <br>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <img id="myImageId" src="/{{$products->imagePath}}" alt="categoty image">
                                <div style="margin-top: 12px" id="preview"></div>
                                <input type="file" name="imagePath" onchange="readURL(this)" class="form-control-file" >
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Update Product</button>
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