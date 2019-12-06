<?php

namespace App\Http\Controllers\Module;

use App\SafetyProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SafetyProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $models = SafetyProfile::all();

        return view('backEnd.module.safetyProfile.index',
            compact(
                'GeneralWebmasterSections',
                'models'
        ));
    }

    public function create()
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $models =  MedicineRegister::all();


        return view('backEnd.module.medicineRegister.create',
            compact(
                'GeneralWebmasterSections',
                'models'
            ));
    }

    public function createPost(Request $request)
    {
        $model = MedicineRegister::where(['id' => $request->id])->first();
        if (!$model){
            $model =  new MedicineRegister();
        }

        $model->inn = (int)$request->inn;
        $model->trade_name = $request->trade_name;
        $model->dosage_form = $request->dosage_form;
        $model->strength = $request->strength;
        $model->authorisation_status = $request->authorisation_status;
        $model->date_of_registration = $request->date_of_registration;
        $model->manufacturer = $request->manufacturer;
        $model->marketing_authorization_holder = $request->marketing_authorization_holder;
        $model->save();

        return $this->index();
    }

    public function update($id)
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $model = MedicineRegister::where(['id'=>$id])->first();


        return view('backEnd.module.medicineRegister.update',
            compact(
                'GeneralWebmasterSections',
                'model'
            ));
    }

    public function view($id)
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $model = MedicineRegister::where(['id'=>$id])->first();


        return view('backEnd.module.medicineRegister.view',
            compact(
                'GeneralWebmasterSections',
                'model'
            ));
    }

    public function delete($id)
    {
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        $models =  MedicineRegister::where(['id'=>$id])->delete();


        return $this->index();
    }

    public function export()
    {
        return Excel::download(new MedicineRegisterExport, 'medicine register.xlsx');
    }
}
