@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card ">
                    <div class="card-body ">
                        <form method="POST" action="{{route('user_uedit')}}/{{$user->id}}">
                            {{method_field("PATCH")}}
                            @csrf

                            <div class="row justify-content-center ">
                                <img src="{{ asset('assets/images/user.png') }}" width="140px;" height="140px;"
                                     style="margin-bottom: 35px;">
                            </div>

                            <div class="row justify-content-center">

                                <!-- ime i prezime -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8"><i class="lni-user"
                                                                                   style="background-color: #f8f8f8; font-size: 36px; color:#d9534f;"></i></span>
                                            </div>
                                            <input type="text" class="form-control noborder" id="inputName" name="name"
                                                   value="{{$user->name}}" required>

                                        </div>
                                    </div>
                                </div>

                                <!-- email-->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-envelope"
                                                                                    style="font-size: 36px; color:#d9534f;"></i></span>
                                            </div>
                                            <input type="email" class="form-control noborder" id="inputEmail"
                                                   name="email"
                                                   value="{{$user->email}}" required>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--password-->
                            <div class="form-group row justify-content-center">
                                <div class="col-md-9" style="padding: 8px !important;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-lock"
                                                                                    style="font-size: 36px; color:#d9534f;"></i></span>
                                        </div>
                                        <input type="password" class="form-control noborder" id="inputPassword"
                                               name="password"
                                               placeholder="Lozinka" required>

                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <!-- broj indeksa-->
                                <div class="form-group ">
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-book"
                                                                                    style="font-size: 36px; color:#d9534f;"></i></span>
                                            </div>
                                            <input type="text" class="form-control noborder" id="inputIndex"
                                                   name="index_number"
                                                   value="{{$user->index_number}}" required>

                                        </div>
                                    </div>
                                </div>

                                <!-- broj telefona-->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-phone-handset"
                                                                                    style="font-size: 36px; color:#d9534f;"></i></span>
                                            </div>
                                            <input type="text" class="form-control noborder" id="inputPhone"
                                                   name="phone"
                                                   value="{{$user->phone}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--fakultet-->
                            <div class="form-group row justify-content-center">
                                <div class="col-md-9" style="padding: 8px !important;">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1" for="select"
                                                     style="background-color: #f8f8f8;"><i class="lni-home"
                                                                                           style="font-size: 36px; color:#d9534f;"></i></span>
                                            </div>

                                            <select class="form-control noborder" id="select" name="faculty"
                                                    style="height: 52px; background-color: #f8f8f8;">
                                                <option value="{{$user->faculty}}"
                                                        {{ ($user->faculty == "Fakultet prirodoslovno-matematičkih i odgojnih znanosti") ? 'selected' : ''}}>
                                                    Fakultet prirodoslovno-matematičkih i odgojnih znanosti
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{ ($user->faculty == "Agronomski i prehrambeno-tehnološki fakultet") ? 'selected' : ''}}>
                                                    Agronomski
                                                    i
                                                    prehrambeno-tehnološki fakultet
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{ ($user->faculty == "Ekonomski fakultet") ? 'selected' : ''}}>
                                                    Ekonomski fakultet
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{ ($user->faculty == "Filozofski fakultet") ? 'selected' : ''}}>
                                                    Filozofski fakultet
                                                </option>

                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Fakultet strojarstva, računarstva i elektrotehnike") ? 'selected' : ''}}>
                                                    Fakultet
                                                    strojarstva, računarstva i elektrotehnike
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Akademija likovnih umjetnosti") ? 'selected' : ''}}>
                                                    Akademija likovnih
                                                    umjetnosti
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Medicinski fakultet") ? 'selected' : ''}}>
                                                    Medicinski fakultet
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Pravni fakultet") ? 'selected' : ''}}>
                                                    Pravni fakultet
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Fakultet zdravstvenih studija") ? 'selected' : ''}}>
                                                    Fakultet zdravstvenih
                                                    studija
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Građevinski fakultet") ? 'selected' : ''}}>
                                                    Građevinski fakultet
                                                </option>
                                                <option value="{{$user->faculty}}"
                                                        {{($user->faculty == "Farmaceutski fakultet") ? 'selected' : ''}}>
                                                    Farmaceutski fakultet
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- studiji -->
                            <div class="form-group row justify-content-center">
                                <div class="col-md-9" style="padding: 8px !important;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-graduation"
                                                                                    style="font-size: 36px; color:#d9534f;"></i></span>
                                        </div>
                                        <input type="text" class="form-control noborder" id="inputStudy" name="study"
                                               value="{{$user->study}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-primary btn-block"
                                            style="background-color: #D9534F; border-color: #D9534F; margin-bottom: 57px;">
                                        {{ __('Spremi') }}
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection

