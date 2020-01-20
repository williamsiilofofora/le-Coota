@extends('layouts.dashBoardNav')

@section('content')





<div class="container formcard formcadeau ">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="formBox ">
                

                <div class="card-body">
                    <form method="POST" action="{{route('event.update',$event->id)}}" enctype="multipart/form-data"
                        novalidate>
                        <div class="card-header">
                    <h2>Editer un evenement</h2>
                </div>
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="title" class="col-4 col-form-label text-md-right">{{ __('Titre') }}</label>
                            
                            <div class="col-6">
                                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror"
                                    name="title" value="{{ $event->title }}" required autocomplete="titre" autofocus>

                                @error('titre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-6">
                                <input type="hidden" name="image" value="{{ $event->image }}" />
                                <input id="image" type="file" name="image"  value="{{ $event->image }}">
                                <label class="" for="image"></label><br />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description"
                                class="col-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-6">
                                <textarea id="description" type="text"
                                    name="description">{{$event->description}}</textarea>
                                <label class="" for="descrition"></label><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="style"
                                class="col-4 col-form-label text-md-right">{{ __('style') }}</label>

                            <div class="col-6">
                                <textarea id="style" type="text"
                                    name="style">{{$event->style}}</textarea>
                                <label class="" for="style"></label><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lienFB"
                                class="col-4 col-form-label text-md-right">{{ __('lienFB') }}</label>

                            <div class="col-6">
                                <textarea id="lienFB" type="text"
                                    name="lienFB">{{$event->lienFB}}</textarea>
                                <label class="" for="lienFB"></label><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lienUT"
                                class="col-4 col-form-label text-md-right">{{ __('lienUT') }}</label>

                            <div class="col-6">
                                <textarea id="lienUT" type="text"
                                    name="lienUT">{{$event->lienUT}}</textarea>
                                <label class="" for="lienUT"></label><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateConcert"
                                class="col-4 col-form-label text-md-right">{{ __('date') }}</label>

                            <div class="col-6">
                                <textarea id="dateConcert" type="text"
                                    name="dateConcert">{{$event->dateConcert}}</textarea>
                                <label class="" for="dateConcert"></label><br />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="origine"
                                class="col-4 col-form-label text-md-right">{{ __('origine') }}</label>

                            <div class="col-6">
                                <textarea id="origine" type="text"
                                    name="origine">{{$event->origine}}</textarea>
                                <label class="" for="origine"></label><br />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Mettre a jour') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div @endsection