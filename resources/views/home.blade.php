@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Korisnici</h5>
                    <p class="card-text">Prikaz korisnika u tablici. Kreiranje korisnika. Uređivanje korisnika.</p>
                    <a href="{{route('users')}}" class="btn btn-danger">Korisnici</a>
                    <a href="{{route('users_create')}}" class="btn btn-danger">Dodaj korisnika</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Timovi</h5>
                    <p class="card-text">Prikaz timova u tablici. Kreiranje timova. Uređivanje podataka tima.</p>
                    <a href="{{route('teams')}}" class="btn btn-danger">Timovi</a>
                    <a href="{{route('teams_create')}}" class="btn btn-danger">Dodaj tim</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
