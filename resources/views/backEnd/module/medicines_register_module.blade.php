@extends('backEnd.layout')

@section('content')
    <div class="padding p-b-0">
        <div class="margin">
           <h1>Модуль "Реестр лекарственных средств"</h1>
        </div>
        <div class="row">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Добавить</button>
            <table class="table table-bordered">
                <theader>
                    <tr>
                        <th>ИНН</th>
                        <th>Торговое название</th>
                        <th>Лекарственная форма</th>
                        <th>Дозировка</th>
                        <th>Регистрационный статус</th>
                        <th>Дата регистраций</th>
                        <th>Пройзводитель</th>
                        <th>Держатель регистрационнго удостовирения</th>
                    </tr>
                </theader>
                <tbody>
                @foreach($models as $model)
                    <tr>
                        <td>{{$model->inn}}</td>
                        <td>{{$model->trade_name}}</td>
                        <td>{{$model->dosage_form}}</td>
                        <td>{{$model->strength}}</td>
                        <td>{{$model->authorisation_status}}</td>
                        <td>{{$model->date_of_registration}}</td>
                        <td>{{$model->manufacturer}}</td>
                        <td>{{$model->marketing_authorization_holder}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
