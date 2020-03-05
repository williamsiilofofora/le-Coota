<div class='container'>
    <div class=''>
        <h2 class="content col-10 col-sm-7 col-md-6 col-lg-6 col-xl-4 mx-auto box">Le cadeau du dimanche</h2>

    </div>

    <div class="row ">
 @foreach ($cadeau as $cadeaux)
        <iframe sandbox="allow-same-origin allow-scripts " class="col-10 col-xl-4 mx-auto "
    src="{{$cadeaux->lien}}" frameborder="0"
            allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <div class="col-10 col-xl-6 mx-auto">
        <h3> {{ $cadeaux->title}}</h3>
            <p>
                {{$cadeaux->descriptionCadeaux}}
            </p>
@endforeach
        </div>
    </div>
</div>