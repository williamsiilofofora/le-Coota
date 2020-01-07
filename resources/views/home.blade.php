@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 55vh;">
    <div class="row justify-content-center">
        <div class="col-md-8"style='margin:150px 0 100px 0;'>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous etes connecté
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
