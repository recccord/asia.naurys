@extends('backEnd.layout')

@section('content')
    <div class="padding p-b-0">
        <div class="margin">
            <h1>Модуль "Реестр лекарственных средств"</h1>
        </div>
        <div class="row">

            <button class="btn btn-success" type="submit">Добавить</button>
            <table class="table table-bordered">
                <tr>
                    <th>МНН</th>
                    <th>Торговое название</th>
                    <th>Торговое название</th>
                    <th>Лекарственная форма</th>
                    <th>Дозировка</th>
                    <th>Регистрационный статус</th>
                    <th>Пройзводитель</th>
                    <th>Держатель регистрационнго удостовирения</th>
                </tr>
            </table>
            <tbody>
            <tr>
                <td></td>
            </tr>
            </tbody>
        </div>
    </div>
@endsection
<?php
