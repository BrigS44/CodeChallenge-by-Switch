@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodaj novog korisnika</div>

                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('users_create') }}" method="POST">
                            {{csrf_field()}}
                            <fieldset>
                                <legend></legend>
                                <div class="form-group">
                                    <label for="inputName" class="col-lg-2 control-label small">Ime i prezime</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control noborder" id="inputName" name="name"
                                               placeholder="Ime i prezime" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label small">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control noborder" id="inputEmail" name="email"
                                               placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label small">Lozinka</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control noborder" id="inputPassword" name="password"
                                               placeholder="Lozinka" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputIndex" class="col-lg-2 control-label small">Broj indeksa</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control noborder" id="inputIndex" name="index_number"
                                               placeholder="Broj indeksa" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-lg-2 control-label small">Broj telefona</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control noborder" id="inputPhone" name="phone"
                                               placeholder="Broj telefona" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label small">Fakultet</label>
                                    <div class="col-lg-10">
                                        <select class="form-control noborder" id="select" name="faculty">
                                            <option value="Agronomski i prehrambeno-tehnološki fakultet">Agronomski i prehrambeno-tehnološki fakultet</option>
                                            <option value="Ekonomski fakultet">Ekonomski fakultet</option>
                                            <option value="Filozofski fakultet">Filozofski fakultet</option>
                                            <option value="Fakultet prirodoslovno-matematičkih i odgojnih znanosti">Fakultet prirodoslovno-matematičkih i odgojnih znanosti</option>
                                            <option value="Fakultet strojarstva, računarstva i elektrotehnike">Fakultet strojarstva, računarstva i elektrotehnike</option>
                                            <option value="Akademija likovnih umjetnosti">Akademija likovnih umjetnosti</option>
                                            <option value="Medicinski fakultet">Medicinski fakultet</option>
                                            <option value="Pravni fakultet">Pravni fakultet</option>
                                            <option value="Fakultet zdravstvenih studija ">Fakultet zdravstvenih studija </option>
                                            <option value="Građevinski fakultet">Građevinski fakultet</option>
                                            <option value="Farmaceutski fakultet">Farmaceutski fakultet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputStudy" class="col-lg-2 control-label small">Studijska grupa</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control noborder" id="inputStudy" name="study"
                                               placeholder="Studijska grupa" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label small">Tip korisnika</label>
                                    <div class="col-lg-10">
                                        <select class="form-control noborder" id="select" name="type">
                                            <option value="admin">Admin</option>
                                            <option value="student">Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12" style="margin-top: 30px;">
                                        <div class="col-md-6">
                                            <button type="reset" class="btn btn-sm swt-button-default  btn-block">Odustani
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-sm swt-button-prim btn-block">Spremi</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection