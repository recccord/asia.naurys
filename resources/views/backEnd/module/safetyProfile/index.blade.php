@extends('backEnd.layout')

@section('content')
    <div class="padding p-b-0">
        <div class="margin">
            <h1>Реестр лекарственных средств</h1>
        </div>
        <div class="row">
            <a href="{{route('medicinesRegisterCreate')}}" class="btn btn-rounded btn-success">
                <i class="material-icons">add_circle_outline</i>
            </a>
            <a href="{{route('medicinesRegisterExport')}}" class="btn btn-rounded btn-success mb-4">
                <i class="material-icons">
                    cloud_download
                </i>
            </a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr >
                        <th class="text-center">Торговое название</th>
                        <th class="text-center">ИМП</th>
                        <th class="text-center">ОХЛС</th>
                        <th class="text-center">SmPC</th>
                        <th class="text-center">PL</th>
                        <th class="text-center">SmPC оригинатора</th>
                        <th class="text-center">PL оригинатора</th>
                        <th class="text-center">Статьи</th>
                        <th></th>
                    </tr>
                    <tbody>
                    @foreach($models as $model)
                        <tr>
                            <td class="text-center">{{$model->inn}}</td>
                            <td class="text-center">{{$model->trade_name}}</td>
                            <td class="text-center">{{ $model->dosage_form}}</td>
                            <td class="text-center">{{$model->strength}}</td>
                            <td class="text-center">{{$model->authorisation_status}}</td>
                            <td class="text-center">{{date('d.m.y',strtotime($model->date_of_registration)) }}</td>
                            <td class="text-center">{{$model->manufacturer}}</td>
                            <td class="text-center">{{$model->marketing_authorization_holder}}</td>
                            <td style="display: flex">
                                <a href="{{route('medicinesRegisterUpdate',['id'=>$model->id])}}">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a href="{{route('medicinesRegisterView',['id'=>$model->id])}}">
                                    <i class="material-icons">remove_red_eye</i>
                                </a>
                                <form action="{{route('medicinesRegisterDelete',['id'=>$model->id])}}" method="post" name="formDelete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <i class="material-icons" style="cursor: pointer" onclick="$('[name=formDelete]').submit()">delete</i>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


{{--            {{$models->links}}--}}
        </div>
    </div>
@endsection

