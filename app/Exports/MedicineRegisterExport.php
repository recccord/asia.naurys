<?php

namespace App\Exports;

use App\MedicineRegister;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MedicineRegisterExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'ИНН',
            'Торговое название',
            'Лекарственная форма',
            'Дозировка',
            'Регистрационный статус',
            'Дата регистраций',
            'Пройзводитель',
            'Держатель регистрационнго удостовирения',
        ];
    }

   public function collection()
   {
        return MedicineRegister::all();
   }

}
