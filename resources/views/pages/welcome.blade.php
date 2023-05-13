@extends('layouts.app')

@section('content')
    {{-- Image Slider --}}
    <div class="shadow-lg container mt-3 pb-4 pt-1">
        <div id="carouselExampleIndicators" class="container-sm carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://lib.cmb.ac.lk/wp-content/uploads/2020/08/lending2020.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lot of Books Avilable</h5>
                        <p>Lot of books are avilable in out library premises.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://careers.midwesttape.com/media/o1hdg3pn/img_9349.jpg?center=0.48409173213213591,0.47674374973197825&mode=crop&width=1500&height=500&rnd=132899144147900000" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Space Facilities</h5>
                        <p>There are so much space facilities are in our library</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://lib.cmb.ac.lk/wp-content/uploads/2020/08/Periodical-2020.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Freedom</h5>
                        <p>Freedom is very important thing for a library</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Book Section--}}
    <div class="container mt-3 shadow" style="background-color: rgb(22, 126, 216)">
        <span>
            <p style="letter-spacing: 1px; font-weight: 500; font-size: 18px; color: white">Books</p>
        </span>
    </div>

    <div class="container mt-2">
        <div class="row gy-2 row-cols-1 row-cols-md-4">
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 15rem;">
                    <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 15rem;">
                    <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 15rem;">
                    <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="card" style="width: 15rem;">
                    <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
