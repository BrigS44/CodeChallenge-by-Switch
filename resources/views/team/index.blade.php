@extends('layouts.app')

@section('content')
    @if($teams)
        <div class="container" style="margin-top: 50px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h3 class="row">Prikaz prijavljenih timova</h3>
                    <div class="card ">

                        <div class="card-body ">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Naziv tima</th>
                                    <th>Voditelj tima</th>
                                    <th>Član tima</th>
                                    <th>Član time</th>
                                    <th>Programski jezici</th>
                                    <th>Programsko okruženje</th>
                                    <th>Link</th>
                                    <th>Datum kreiranje</th>
                                    <th>Datum ažuriranja</th>
                                    <th>Uredi</th>
                                    <th>Izbriši</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $team)

                                    <tr>
                                        <td>{{$team->id}}</td>
                                        <td>{{$team->teamname}}</td>
                                        <td>{{$team->teamleader->name}}</td>
                                        <td>{{$team->team1->name}}</td>
                                        @if($team->team2)
                                            <td>{{$team->team2->name}}</td>
                                        @else
                                            <td> / </td>
                                        @endif
                                        <td>{{$team->programingLanguage}}</td>
                                        <td>{{$team->enviroment}}</td>
                                        <td>{{$team->linkToCloud}}</td>
                                        <td>{{$team->created_at}}</td>
                                        <td>{{$team->updated_at}}</td>


                                        <td><a href="{{route('teams_edit')}}/{{$team->id}}"
                                               class="btn btn-warning btn-xs">Uredi</a></td>
                                        <td><a href="{{route('teams_delete')}}/{{$team->id}}"
                                               class="btn noborder btn-danger btn-xs">Izbriši</a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    @endif
@endsection

