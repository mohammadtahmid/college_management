
<main class="container ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $slider->image) }}" class="d-block" style="height: 500px; width:100%" alt="img/s1.jpg">
                    <div class="carousel-caption mb-5 d-none d-md-block">
                        <a href="#" role="button" class="btn btn-success">Online Admission</a>
                        <a href="#" class="btn btn-info">Graduation Ceremony</a>
                        <a href="#" class="btn btn-primary">Job fair</a>
                    </div>
                </div>
            @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
