@extends('layout')
@section('content')
    <div class="container-fluid rounded" id="rooms">
        <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner rounded" role="listbox">

                <div class="carousel-item active">

                    <img src="img/bedroom-9.jpg" size="width:1000px height:400" alt="responsive image" class="d-block img-fluid row1">

                    <div class="carousel-caption formRoom justify-content-center align-items-center">
                        <div>
                            <h5>Warm bedroom</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <img src="img/bedroom-10.jpg" alt="responsive image" class="d-block img-fluid row1">
                    <div class="carousel-caption formRoom justify-content-center align-items-center">
                        <div>
                            <h5>shinny bedroom</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <img src="img/bedroom-2.jpg" alt="responsive image" class="d-block img-fluid row1">
                    <div class="carousel-caption formRoom justify-content-center align-items-center">
                        <div>
                            <h5>Double beds</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bedroom-12.jpg" alt="responsive image" class="d-block img-fluid row1">
                    <div class="carousel-caption formRoom justify-content-center align-items-center">
                        <div>
                            <h5>Dreamland bedroom</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection
   <!-- /.container -->

    <!-- ********************F