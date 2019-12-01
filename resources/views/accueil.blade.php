@extends('layouts.app')

@section('content')

<section class="background ">
    @include('header.carrousel')
</section>

<section id="about">
    @include('about.about')
</section>

<section id="event">
    @include('evenement.lastEvent')
    @include('evenement.cardEvent')
</section>

<section class="visite container-fluid">
    @include('about.visit')
</section>
<section id="cadeaux">
    @include('cadeaux.cadeaux')
</section>
@endsection