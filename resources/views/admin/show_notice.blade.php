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
                        <div class="card mb-3">

                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{$notice->title}}</h5>
                                    <p class="card-text"><small class="text-body-secondary">{{ $notice->created_at}}</small>
                                    </p>
                                </div>
                                <p class="card-text">{{ $notice->massage }}</p>

                            </div>
                            <img src="{{ asset('storage/' . $notice->image) }}" class="card-img-top" alt="...">
                        </div>



                    <div>
                    </div>
                </div>
                <!-- JavaScript files-->
 @include('admin.script')
</body>

</html>
