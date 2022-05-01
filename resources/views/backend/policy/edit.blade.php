@extends('backend.layout.backend')

{{--@section('csss')--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--@endsection--}}

@section('content')
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Policy</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('policy.update',$data['row']->id)}}" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="col-md-9">


                    <div class="form-group">
                        <label><strong>Description</strong></label>
                        <textarea class="ckeditor form-control" name="desc">{!! $data['row']->desc !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label><strong>Term</strong></label>
                        <textarea class="ckeditor form-control" name="term">{!! $data['row']->term !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label><strong>Condition</strong></label>
                        <textarea class="ckeditor form-control" name="condition">{!! $data['row']->condition !!}</textarea>
                    </div>




                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">

                        Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
@section('jss')

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>


    <script>

        $(document).ready(function () {
            $('#category_id').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'GetSubCat/' +id,
                    success: function (response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('#sub_category').empty();
                        $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                        response.forEach(element => {
                            $('#sub_category').append(`<option value="${element['id']}">${element['name']}</option>`);
                        });
                    }
                });
            });
        });

    </script>
    <script>

        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

        $(document).ready(function () {

            $(".btn-success").click(function () {
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function () {
                $(this).parents(".control-group").remove();
            });

        });



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
