<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">


                    <div class=" d-flex justify-content-center">
                        <div class="block">
                            <div class="title"><strong class="d-block">Slider Image Add form</strong></div>
                            <div class="block-body">
                                <form action="{{url('add_slider')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">slider Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <input type="submit" value="Submit" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>






<div class="row">
@foreach ($sliders as $slider)
    <div class="col-md-6">
    <div class="card mb-3">

                        <div class="card-body">
                            <img src="{{ asset('storage/' . $slider->image) }}" class="img-fluid"
                            alt="Slider Image">
                        </div>
                        <a href="{{ url('delete_slider', $slider->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this notice?')"
                                                        class="btn btn-danger">Delete</a>

                    </div>
    </div>
    @endforeach
</div>




                    <div>
                    </div>
                </div>
                <!-- JavaScript files-->
                <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
                <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
                <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
                <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
                <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
                <script src="{{asset('admincss/js/charts-home.js')}}"></script>
                <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>
