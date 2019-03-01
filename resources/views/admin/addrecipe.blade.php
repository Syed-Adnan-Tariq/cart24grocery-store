@extends('admin.master.master')

@section('title')
    Add Recipe Form
@endsection

@section('content')

    <div style="background-color: aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div  class="col-sm-6">
                    <h3 style="text-align: center">Add Recipe</h3>
                    <br>
                    <form method="POST" action="{{route('admin.recipe_store')}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <label for="name">Recipe Name:</label>
                        <input type="text" name="title" class="form-control" placeholder="Recipe name">

                        <label for="price">Video Path:</label>
                        <input type="url" name="vpath" class="form-control"
                                                                placeholder="https://www.youtube.com/embed/LbT0p76IJ94">

                        <label>Ingredients</label>
                        <textarea type="text" name="ingredients" class="form-control" placeholder="Items included"></textarea>

                        <label>Cooking Method</label>
                        <textarea type="text" name="cmethod" class="form-control" placeholder="cooking method"></textarea>

                        <label>Serve</label>
                        <input type="number" name="serve" min="1" class="form-control" placeholder="Please Enter no of Peoples">

                        <label>Cooking Time(mint)</label>
                        <input type="number" name="ctime" min="2" class="form-control" placeholder="Please Enter Mints">

                        {{--@php--}}
                            {{--$ids = (isset($product) && $product->categories->count() > 0 ) ?--}}
                             {{--array_pluck($product->categories->toArray(), 'id') : null;--}}
                        {{--@endphp--}}
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
                            <div class="form-group" id="preview">
                                <input type="file" name="imagePath" onchange="readURL(this)" class="form-control-file" >
                            </div>
                        </div>
                        <br><br><br>
                        <button type="submit" class="btn btn-success">Add Reciep</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{--<script>--}}
        {{--$('#select2').select2({--}}
            {{--placeholder: "Select multiple products",--}}
            {{--allowClear: true--}}
        {{--});--}}


    {{--</script>--}}
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