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
                            <div class="title"><strong class="d-block">Notice Update Form</strong></div>
                            <div class="block-body">
                                <form action="{{url('update_notice/'.$notice->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" value="{{ old('title',$notice->title) }}" name="title"
                                            placeholder="Enter notice title" class="form-control">
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Text area</label>
                                        <textarea name="massage" value="" placeholder="Enter notice"
                                            class="form-control">{{ old('massage',$notice->massage) }}</textarea>
                                        @error('massage')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Notice Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset('storage/' . $notice->image) }}" class="w-25" alt="">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <input type="submit" value="Update" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
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
