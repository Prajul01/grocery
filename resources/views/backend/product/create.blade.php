@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-9">
                    <div class="form-group" >
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" oninput="makeSlug()"  >
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text"  name="slug" id="slug" class="form-control" readonly>
                    </div>
                    <div class="form-group" >
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"   >
                    </div>
                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="ckeditor form-control" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="category_id">Select Category</label>

                        <select class="form-control formselect required" name="category_id"
                                id="category_id">
                            <option value="0" disabled selected>Select
                                Main Category*</option>
                            @foreach($data['category'] as $categories)
                                <option  value="{{ $categories->id }}">
                                    {{ ucfirst($categories->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <h3 >Sub Category*</h3>
                        <select class="form-control  formselect required" name="sub_category_id" placeholder="Select Sub Category" id="sub_category_id"
                        >
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
                    </div>

                    <div class="form-group" >
                        <label for="discountedprice">DiscountedPrice</label>
                        <input type="text" class="form-control" id="discountedprice" name="discountedprice" placeholder="Enter discounted price">
                    </div>
                    <div class="form-group">
                        <label for="feature_image">Feature-Image</label>
                        <input type="file"  name="image_files" id="image_files" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file"  name="image_file[]" id="imagefile" class="form-control"   multiple >
                    </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
@section('jss')
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>



    <script>
        $(document).ready(function () {
            $('#category_id').on('change', function () {
                let id = $(this).val();
                $('#sub_category_id').empty();
                $('#sub_category_id').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'GetSubCatAgainstMainCatEdt/' +id,
                    success: function (response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('#sub_category_id').empty();
                        $('#sub_category_id').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                        response.forEach(element => {
                            $('#sub_category_id').append(`<option value="${element['id']}">${element['name']}</option>`);
                        });
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">




        function makeSlug() {
            var name = document.getElementById('name').value;
            var slug = document.getElementById('slug');
            slug.value = string_to_slug(name);
        }
        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
            var to   = "aaaaaeeeeeiiiiooooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/\?/g, '-')
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };

    </script>

@endsection
