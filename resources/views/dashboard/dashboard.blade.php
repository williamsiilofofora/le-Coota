@extends('layouts.dashBoardNav')

@section('content')
<section id="formcard" class="row flex-row">
    <div class="col-lg-6 col-10">
    @include('dashboard.formCard')</div>
    <div class="col-lg-6 col-10">
    @include('dashboard.formCadeau')</div>
</section>  
<section>
    
</section> 
@endsection