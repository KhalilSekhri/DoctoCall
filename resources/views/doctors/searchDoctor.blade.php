@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Rechercher un Docteur</strong></div>

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
                       <!-- <thead>

                            <tr>

                                <th>Consulter</th>
 
                            </tr>


                        </thead>-->

                        <tbody>

                            @foreach($specialities as $specialitie)
                            <tr>

                                <td><strong>{{ $specialitie->name }} </strong></td>

                                <td><button class="btn btn-info pull-right"><a href=""><strong>Consulter</strong></a></button></td>

                            @endforeach

                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection