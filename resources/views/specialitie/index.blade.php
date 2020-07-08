@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des spécialités</div>

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
                  
                    <table class="table">
                        <thead>

                            <tr>

                                <th>Nom</th>
                                <th>Consulter</th>
                                <th>Editer</th>
                                <th>Supprimer</th>


                            </tr>
                            

                        </thead>

                        <tbody>

                            @foreach($specialities as $specialitie)
                            <tr>

                                <td>{{ $specialitie->name }} </td>

                                <td><button class="btn btn-info pull-right"><a href="{{ route('specialitie.show',
                                    $specialitie->id) }}"><strong>Consulter</strong></a></button></td>

                                <td><button class="btn btn-info pull-right"><a href="{{ route('specialitie.edit',
                                    $specialitie->id) }}"><strong>Editer
                                    </strong></a></button></td>

                                <td><button class="btn btn-info pull-right"><a onclick="return confirm('Vraiment supprimer cet utilisateur ?')" href="{{ route('delete_specialitie',
                                    $specialitie->id) }}"><strong>Supprimer</strong></a></button></td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    <button class="btn btn-info pull-right"><a href="{{ route('specialitie.create') }}"><strong>New</strong></a></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection