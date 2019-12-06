@extends('backEnd.layout')

@section('content')
    <div class="padding p-b-0">
        <div class="margin">
            <h1>Модуль "Реестр лекарственных средств"</h1>
        </div>
        <div class="row">
            @include('backEnd.module.medicineRegister._form',$model)
        </div>
    </div>
@endsection
