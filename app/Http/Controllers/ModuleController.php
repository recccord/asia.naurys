<?php
namespace App\Http\Controllers;


use App\MedicineRegister;
use App\WebmasterSection;

class ModuleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function medicinesRegister()
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $models =  MedicineRegister::all();


        return view('backEnd.module.medicineRegister.index',
            compact(
                'GeneralWebmasterSections',
                'models'
            ));
    }
}
