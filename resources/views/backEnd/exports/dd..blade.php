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
            <td>{{date('d.m.y',strtotime($model->date_of_registration)) }}</td>
            <td>{{$model->manufacturer}}</td>
            <td>{{$model->marketing_authorization_holder}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
