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
    <div class="container mt-5">
    @foreach ($faculties as $faculty)
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex">
            <img src="{{ url(asset('storage/'.$faculty->image)) }}" class="card-img-top w-25" style="height: 250px;" alt="...">
                <div class="p-5">
                    <p class="card-title"><strong class="text-bold">Name:</strong> {{ $faculty->name }}</p>
                    <p class="card-text"><strong class="text-bold">Designation:</strong> {{ $faculty->designation }}</p>
                    <p class="card-text"><strong class="text-bold">Department:</strong> {{ $faculty->department }}</p>
                    <p class="card-text"><strong class="text-bold">Phone:</strong> {{ $faculty->phone }}</p>
                    <p class="card-text"><strong class="text-bold">Email:</strong> {{ $faculty->email }}</p>
                </div>
            </div>

        </div>

    </div>
    @endforeach


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
