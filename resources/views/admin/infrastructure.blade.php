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
                            <div class="title"><strong class="d-block">Notice Form</strong></div>
                            <div class="block-body">
                                <form action="{{url('add_infrastructure')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Infrastructure Image</label>
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
                        @foreach ($infrastructure as $infrastructures)
                            <div class="col-md-4">
                                <div class="card mb-3">

                                    <div class="card-body">
                                        <img style="height: 350px;" src="{{ asset('storage/' . $infrastructures->image) }}" class="img-fluid"
                                            alt="Slider Image">
                                    </div>
                                    <a href="{{ url('delete_infrastructure', $infrastructures->id) }}"
                                        onclick="confirmation(event)"
                                        class="btn btn-danger">Delete</a>

                                </div>
                            </div>
                        @endforeach
                    </div>







                    <div>
                    </div>
                </div>
                <!-- JavaScript files-->
 @include('admin.script')
</body>

</html>
