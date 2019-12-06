<form action="{{ route('medicinesRegisterCreatePost') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$model->id or ''}}">
    <div class="form-group">
        <label for="inn" class="col-form-label">ИНН:</label>
        <input type="number" class="form-control" name="inn" value="{{$model->inn or ''}}">
    </div>
    <div class="form-group">
        <label for="trade_name" class="col-form-label">Торговое название:</label>
        <input type="text" class="form-control" name="trade_name" value="{{$model->trade_name or ''}}">
    </div>
    <div class="form-group">
        <label for="dosage_form" class="col-form-label">Лекарственная форма:</label>
        <input type="text" class="form-control" name="dosage_form" value="{{$model->dosage_form or ''}}">
    </div>
    <div class="form-group">
        <label for="strength" class="col-form-label">Дозировка:</label>
        <input type="text" class="form-control" name="strength" value="{{$model->strength or ''}}">
    </div>
    <div class="form-group">
        <label for=authorisation_status" class="col-form-label">Регистрационный статус:</label>
        <input type="text" class="form-control" name="authorisation_status" value="{{$model->authorisation_status or ''}}">
    </div>
    <div class="form-group">
        <label for="date_of_registration" class="col-form-label">Дата регистраций:</label>
        <input type="date" class="form-control" name="date_of_registration" value="{{$model->date_of_registration or ''}}">
    </div>
    <div class="form-group">
        <label for="manufacturer" class="col-form-label">Пройзводитель:</label>
        <input type="text" class="form-control" name="manufacturer" value="{{$model->manufacturer or ''}}">
    </div>
    <div class="form-group">
        <label for="marketing_authorization_holder" class="col-form-label">Держатель регистрационнго удостовирения:</label>
        <input type="text" class="form-control" name="marketing_authorization_holder" value="{{$model->marketing_authorization_holder or ''}}">
    </div>
    <button type="submit">Добавить</button>
</form>
