<!doctype html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>
    <div id="preloader">
        <script>
            var loader = document.getElementById("preloader");

            window.addEventListener("load", function() {
                loader.style.display = "none";
            })
        </script>
    </div>
    @include('home.header')
    <!-- welcome text -->
<main>
<div class="container-fluid bg-sec">
  <div class="row col-xxl-12  pb-0">
<h1 class="text-uppercase text-center">courses</h1>
  </div>
</div>
</main>

<div class="container py-4">
<div class="row">
    @foreach ($diploma as $course)
    <div class="col-md-3 mb-4"> <!-- mb-4 adds bottom margin -->
        <div class="card h-100">
            <img src="{{url(asset("storage/".$course->image))}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$course->name}}</h5>
                <p class="card-text">{{ $course->capacity }}</p>
                <a href="#" class="btn btn-primary w-100">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>

    <!--  footer start -->

    <!-- Footer -->
        @include('home.footer')
    <!-- Footer -->



    <script>
        var date = new Date();
        var year = date.getFullYear();
        document.getElementById("year").innerHTML = year;
    </script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <!-- tool tips -->
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            delay: 400,
        });
    </script>
</body>

</html>
