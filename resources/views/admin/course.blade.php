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
                            <div class="title"><strong class="d-block">Course Add form</strong></div>
                            <div class="block-body">
                                <form action="{{url('add_course')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Course Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Course name:</label>
                                        <input type="text" value="{{ old('name') }}" name="name"
                                            placeholder="Enter Course name" class="form-control">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Course Capacity:</label>
                                        <input type="text" value="{{ old('capacity') }}" name="capacity"
                                            placeholder="Enter Course capacity" class="form-control">
                                        @error('capacity')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Course Type:</label><br>
                                        <input type="radio" id="diploma" name="type" value="Diploma">
                                        <label for="diploma">Diploma</label><br>
                                        <input type="radio" id="RPL" name="type" value="RPL">
                                        <label for="rpl">CSS</label><br>
                                        @error('rpl')
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






                                        <div class="">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Faculties List</strong></div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <t>
                                            <th>Image</th>
                                            <th>Course name</th>
                                            <th>Capacity</th>
                                            <th>Course type</th>
                                            <th class="d-flex justify-content-center">Action</th>
                                        </t>
                                    </thead>
                                    <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                                <td><img src="{{ url(asset('storage/'.$course->image)) }}" class="w-50" alt="">
                                                <td scope="row">{{ $course->name }}</td>
                                                <td>{{ $course->capacity }}</td>
                                                <td>{{ $course->type }}</td>
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ url('delete_faculty', $course->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this notice?')"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                @endforeach



                                    </tbody>
                                </table>
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
