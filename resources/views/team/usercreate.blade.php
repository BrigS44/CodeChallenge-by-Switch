@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="title-area">
                    <h2 class="mu-title row justify-content-center">PRIJAVI SVOJ TIM</h2>
                    <p style="text-align: center;">Obavezno je posjedovanje vlastite opreme.</p>
                    <p style="text-align: center;">U ovoj formi voditelj tima prijavljuje tim na natjecanje. Upisuje ostale članove
                        tima. </p>
                    <p style="text-align: center;">Polje <b>link</b> potrebno je ažurirati najkasnije do <b>25.5.2018. u 8:30h </b></p>
                </div>
                <div class="card ">
                    <div class="card-body ">
                        <form method="POST" action="{{ route('team_ucreate') }}">
                            @csrf

                            <div class="row justify-content-center ">
                                <img src="{{ asset('assets/images/user.png') }}" width="140px;" height="140px;"
                                     style="margin-bottom: 35px;">
                            </div>
                            <div class="row justify-content-center">

                                <!-- name -->

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8"><i class="lni-users"
                                                                                   style="background-color: #f8f8f8; font-size: 33px; color:#d9534f;"></i></span>
                                            </div>
                                            <input id="name" type="text" class="form-control swt-input" name="teamname"
                                                   required autofocus
                                                   placeholder="Naziv tima" style="background-color: #f8f8f8;">


                                        </div>
                                        <div class="col-md-10">
                                            <label style="float: left; color: red;"><small>Polje je obavezno*</small></label>
                                        </div>
                                    </div>
                                </div>




                                <!-- članovi tima-->

                                <div class="col-md-10 row justify-content-center">
                                    <div class="col-md-6" style="padding-left: 0px; padding-right: 3px;" >
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1" for="select"
                                                     style="background-color: #f8f8f8;"><i class="lni-user"
                                                                                           style="font-size: 33px; color:#d9534f;"></i></span>
                                                </div>
                                                @if($users)
                                                    <select class="form-control" id="select"
                                                            name="team1_id"
                                                            style="height: 52px; background-color: #f8f8f8;">
                                                        <option value="">Unesite prvog člana tima</option>
                                                        @foreach($users as $user)
                                                            @if($user->type == 'student')
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: left; color: red; padding-top: 0px;"><small>Polje je obavezno*</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px; padding-left: 3px;">
                                        <div class="form-group">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1" for="select"
                                                     style="background-color: #f8f8f8;"><i class="lni-user"
                                                                                           style="font-size: 33px; color:#d9534f;"></i></span>
                                                </div>
                                                @if($users)
                                                    <select class="form-control " id="select"
                                                            name="team2_id"
                                                            style="height: 52px; background-color: #f8f8f8;">
                                                        <option value="">Unesite drugog člana tima</option>
                                                        @foreach($users as $user)
                                                            @if($user->type == 'student')
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--programsko okruženje i programski jezici-->


                                <div class="col-md-10 row justify-content-center">
                                    <div class="col-md-6" style="padding-left: 0px; padding-right: 3px;">
                                        <div class="form-group">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8"><i class="lni-code"
                                                                                   style="background-color: #f8f8f8; font-size: 33px; color:#d9534f;"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="programski jezici"
                                                       id="inputProgramingLanguages" name="programingLanguages" style="background-color: #f8f8f8; ">
                                            </div>
                                            <div class="col-md-11">
                                                <label style="float: left; color: red;"><small> npr. PHP, Python, Java i dr.</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-left: 3px; padding-right: 0px;">
                                        <div class="form-group">
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8"><i class="lni-laptop-phone"
                                                                                   style="background-color: #f8f8f8; font-size: 33px; color:#d9534f;"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="programsko okruženje"
                                                       id="inputEnviroment" name="enviroment"  style="background-color: #f8f8f8; ">
                                            </div>
                                            <div class="col-md-11">
                                                <label style="float: left; color: red;"><small> npr. PHPStorm, NetBeans, Android Studio i dr.</small></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8"><i class="lni-link"
                                                                                   style="background-color: #f8f8f8; font-size: 33px; color:#d9534f;"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="link"
                                                   id="inputLink" name="linkToCloud"  style="background-color: #f8f8f8; ">
                                        </div>
                                        <div class="col-md-12">
                                            <label style="float: left; color: red;"><small>Polje se ispunjava po završetku natjecanja.Unesite link na kojem se nalazi Vaš projekt (Google Drive, Dropbox itd). </small></label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 row justify-content-center" style="margin-bottom: 38px; margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #d9534f; border-color: #d9534f">SPREMI</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection
