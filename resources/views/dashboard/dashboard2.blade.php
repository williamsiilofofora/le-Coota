@extends('layouts.dashBoardNav')

@section('content')
<section class="formcard" class="row flex-row">
    <div class=" col">
    @include('dashboard.formCard')</div>
    <div class=" col ">
    @include('dashboard.formCadeau')</div>
</section>
<section>
    @foreach ($eventDash as $events)
        <div class="row">
            <div class="circle">
                <img class="" src="{{asset('images/thumb') }}/{{$events->image}}" alt="Card image cap">
            </div>
            <div class="">
                <input type="hidden" name="interv" id="interv" value="{{$events->id}}">
                <h4 class="card-title">{{$events->title}}</h4>
                <hr>
                <h6 class="">Style: {{$events->style}}</h6>
                <p>Origine: {{$events->origine}}</p>
                <p>Le {{ \Carbon\Carbon::parse($events->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
                <p class="card-text">{{Str::limit($events->description,150)}}</p>
            </div>
            <div class="">
                
                <div>
                    <a href="{{route('event.edit',$events->id)}}" class="circle btn btn-dark fa fa-edit"></a>
                <a href="{{route('event.destroy',$events->id)}}" class=" circle btn btn-dark fa fa-times-circle"></a>
                 
                </div>
                <a href="{{ $events->lienFB}}" class="fa fa-facebook" target="_blank"></a>
                <a href="{{ $events->lienUT}}" class="fa fa-youtube" target="_blank"></a>
            </div>
        </div>
        
    @endforeach<div> {{$eventDash->links()}}</div> 
</section>
@endsection