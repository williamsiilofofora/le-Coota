<div class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target=".carousel" data-slide-to="0" class="active"></li>
        <li data-target=".carousel" data-slide-to="1"></li>
        <li data-target=".carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner bg ">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images')}}/{{$cootaImg1}}" alt="photo coota 1">
            <div class="carousel-caption">

                <div class="content text-center ">
                    <h2 data-animation="fadeInUp" data-delay="100ms" style="animation-delay: 100ms; opacity: 1;"
                        class="animated fadeInUp">LE COOTA </h2><br />
                    <p data-animation="fadeInUp" data-delay="300ms" style="animation-delay: 300ms; opacity: 1;"
                        class="zone animated fadeInUp">Cafe concert</p>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images')}}/{{$cootaImg2}}" alt="photo coota 2">
            <div class="carousel-caption">

                <div class="content text-center ">
                    <h2 data-animation="fadeInUp" data-delay="100ms" style="animation-delay: 100ms; opacity: 1;"
                        class="animated fadeInUp">LE COOTA</h2><br />
                    <p data-animation="fadeInUp" data-delay="300ms" style="animation-delay: 300ms; opacity: 1;"
                        class="zone animated fadeInUp">Ouvert du jeudi au dimanche<br />17h/1h30</p>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{asset('images')}}/{{$cootaImg3}}" alt="photo coota 3">
            <div class="carousel-caption">

                <div class="content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms" style="animation-delay: 100ms; opacity: 1;"
                        class="animated fadeInUp">LE COOTA </h2><br />
                    <p data-animation="fadeInUp" data-delay="300ms" style="animation-delay: 300ms; opacity: 1;"
                        class="zone animated fadeInUp">Zone de Convivialite</p>
                </div>

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href=".carousel" role="button" data-slide="prev">
        <span class="chevron" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href=".carousel" role="button" data-slide="next">
        <span class="chevron" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="slide-down animated infinite flash slower" id="scrollDown">
    <div class="line"><i class="fa fa-angle-down"></i></div>
</div>