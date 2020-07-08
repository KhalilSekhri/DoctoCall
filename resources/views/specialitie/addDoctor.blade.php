@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('Ajouter un docteur') }}</strong></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    
                    <form method="POST" action="{{ route('specialitie.update',$specialitie->id) }}">
                        @csrf 
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $specialitie->name }}" required autocomplete="name" autofocus>
                            </div>
                            
                        </div>
                        
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Personnel</h6>
                            <a class="dropdown-item" href="#">Dompteurs</a>
                            <a class="dropdown-item" href="#">Chasseurs</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Lieux</h6>
                            <a class="dropdown-item" href="#">Bibliothèques</a>
                            <a class="dropdown-item" href="#">Restaurants</a>
                        </div>
                        </div>

                    </form>
                   
       </div>
            </div>
        </div>
    </div>
</div>
@endsection
