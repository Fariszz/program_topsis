<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCriteriaValueRequest;
use App\Models\Alternative;
use App\Models\AlternativeValue;
use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopsisController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        // $data = AlternativeValue::with('alternative')->get();
        $data = Alternative::with('values')->get();
        $criterias = Criteria::all();

        $weight = Criteria::pluck('weight', 'id');
        $topsis = new TopsisTestController();

        $data1 = $topsis->normalizedMatrix($criterias->count());
        $data2 = $topsis->weightedMatrix($data1['normalizedValue'], $weight);

        $data3 = $topsis->positiveIdealSolution($data2);
        $data4 = $topsis->negativeIdealSolution($data2);

        $data5 = $topsis->positiveDistances($data2, $data3);
        $data6 = $topsis->negativeDistances($data2, $data4);

        $data7 = $topsis->closenessCoefficient($data5, $data6);

        $data8 = $topsis->sortData($data7);

        $positiveNegative = $this->mergePositiveNegative($data5, $data6);
        $positiveNegativeIdeal = $this->mergePositiveNegative($data3, $data4);

        $dataKedekatan = $this->getNameAlternative($data7);
        $dataKedekatanSort = $this->getNameAlternative($data8);

        return view('ranking-list',[
            'data' => $data,
            'criterias' => $criterias,
            'normalizedMatrix' => $data1['normalizedValue'],
            'divider' => $data1['divider'],
            'weightedMatrix' => $data2,
            'positiveIdealSolution' => $data3,
            'negativeIdealSolution' => $data4,
            'positiveDistances' => $data5,
            'negativeDistances' => $data6,
            'closenessCoefficient' => $data7,
            'sortData' => $data8,
            'positiveNegative' => $positiveNegative,
            'positiveNegativeIdeal' => $positiveNegativeIdeal,
            'dataKedekatan' => $dataKedekatan,
            'dataKedekatanSort' => $dataKedekatanSort,
        ]);
    }

    public function alternative(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        Alternative::create([
            'name' => $request->name,
        ]);
    }

    public function createValueCriteria(Request $request) {
        $request->validate([
            'values' => 'required|array',
            'values.*.criteria_id' => 'required',
            'values.*.alternative_id' => 'required',
            'values.*.value' => 'required',
        ]);

        $values = $request->input('values');

        foreach ($values as $data) {
            AlternativeValue::create([
                'criteria_id' => $data['criteria_id'],
                'alternative_id' => $data['alternative_id'],
                'value' => $data['value'],
            ]);
        }
    }

    public function mergePositiveNegative($positive, $negative) {
        $data = [];
        // add positive with add column positive
        foreach ($positive as $key => $value) {
            $data[$key]['positive'] = $value;
        }

        // add negative with add column negative
        foreach ($negative as $key => $value) {
            $data[$key]['negative'] = $value;
        }

        return $data;
    }

    public function addData() {
        $criteria2 = [
            ['value' => '2017', 'label' => '2017'],
            ['value' => '2018', 'label' => '2018'],
            ['value' => '2019', 'label' => '2019'],
            ['value' => '2020', 'label' => '2020'],
            ['value' => '2021', 'label' => '2021'],
        ];

        $criteria3 = [
            ['value' => 'Sneakers', 'label' => 'Sneakers'],
            ['value' => 'SlipOn', 'label' => 'Slip On (Tanpa Tali)'],
            ['value' => 'LowCut', 'label' => 'Low Cut'],
            ['value' => 'HighCut', 'label' => 'High Cut'],
            ['value' => 'Heels', 'label' => 'Wedges / Heels'],
        ];

        $criteria4 = [
            ['value' => 'Casual', 'label' => 'Casual (Sehari-hari)'],
            ['value' => 'Training', 'label' => 'Training'],
            ['value' => 'Running', 'label' => 'Running'],
            ['value' => 'Sporty', 'label' => 'Sporty'],
            ['value' => 'Formal', 'label' => 'Formal'],
        ];

        $criteria5 = [
            ['value' => 'Tekstil', 'label' => 'Tekstil'],
            ['value' => 'Canvas', 'label' => 'Canvas'],
            ['value' => 'Sintetis', 'label' => 'Sintetis'],
            ['value' => 'Mesh', 'label' => 'Mesh'],
            ['value' => 'Knit', 'label' => 'Knit'],
            ['value' => 'Leather', 'label' => 'Leather'],
            ['value' => 'Suede', 'label' => 'Suede'],
        ];

        $criteria6 = [
            ['value' => 'Normal', 'label' => 'Harga Normal'],
            ['value' => 'Diskon', 'label' => 'Harga Diskon']
        ];

        $criteria7 = [
            ['value' => 'Unisex', 'label' => 'Unisex'],
            ['value' => 'Man', 'label' => 'Man'],
            ['value' => 'Woman', 'label' => 'Woman'],
        ];

        return view('form.add-data-content',[
            'criteria2' => $criteria2,
            'criteria3' => $criteria3,
            'criteria4' => $criteria4,
            'criteria5' => $criteria5,
            'criteria6' => $criteria6,
            'criteria7' => $criteria7,
        ]);
    }

    public function editData($id){
        $criteria2 = [
            ['value' => '10', 'label' => '2017'],
            ['value' => '20', 'label' => '2018'],
            ['value' => '30', 'label' => '2019'],
            ['value' => '40', 'label' => '2020'],
            ['value' => '50', 'label' => '2021'],
        ];

        $criteria3 = [
            ['value' => '50', 'label' => 'Sneakers'],
            ['value' => '40', 'label' => 'Slip On (Tanpa Tali)'],
            ['value' => '30', 'label' => 'Low Cut'],
            ['value' => '20', 'label' => 'High Cut'],
            ['value' => '10', 'label' => 'Wedges / Heels'],
        ];

        $criteria4 = [
            ['value' => '50', 'label' => 'Casual (Sehari-hari)'],
            ['value' => '40', 'label' => 'Running'],
            ['value' => '30', 'label' => 'Training'],
            ['value' => '20', 'label' => 'Sporty'],
            ['value' => '10', 'label' => 'Formal'],
        ];

        $criteria5 = [
            ['value' => '70', 'label' => 'Tekstil'],
            ['value' => '60', 'label' => 'Canvas'],
            ['value' => '50', 'label' => 'Sintetis'],
            ['value' => '40', 'label' => 'Mesh'],
            ['value' => '30', 'label' => 'Knit'],
            ['value' => '20', 'label' => 'Leather'],
            ['value' => '10', 'label' => 'Suede'],
        ];

        $criteria6 = [
            ['value' => '10', 'label' => 'Harga Normal'],
            ['value' => '20', 'label' => 'Harga Diskon']
        ];

        $criteria7 = [
            ['value' => '30', 'label' => 'Unisex'],
            ['value' => '20', 'label' => 'Man'],
            ['value' => '10', 'label' => 'Woman'],
        ];

        $data = Alternative::with('values')->findOrFail($id);

        return view('form.edit-data-content',[
            'data' => $data,
            'criteria2' => $criteria2,
            'criteria3' => $criteria3,
            'criteria4' => $criteria4,
            'criteria5' => $criteria5,
            'criteria6' => $criteria6,
            'criteria7' => $criteria7,
        ]);
    }

    public function addCriteriaValue(AddCriteriaValueRequest $request) {
        // $request->all();
        $criteria1 = $request->addCriteria1($request->c1);
        $criteria2 = $request->addCriteria2($request->c2);
        $criteria3 = $request->addCriteria3($request->c3);
        $criteria4 = $request->addCriteria4($request->c4);
        $criteria5 = $request->addCriteria5($request->c5);
        $criteria6 = $request->addCriteria6($request->c6);
        $criteria7 = $request->addCriteria7($request->c7);

        DB::beginTransaction();

        try {
            $alternative = Alternative::create([
                'name' => $request->name,
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 1,
                'value' => $criteria1,
                
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 2,
                'value' => $criteria2,
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 3,
                'value' => $criteria3,
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 4,
                'value' => $criteria4,
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 5,
                'value' => $criteria5,
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 6,
                'value' => $criteria6,
            ]);

            AlternativeValue::create([
                'alternative_id' => $alternative->id,
                'criteria_id' => 7,
                'value' => $criteria7,
            ]);


            DB::commit();
            return redirect()->to('/')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return redirect()->to('/add-data')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function updateCriteriaValue(AddCriteriaValueRequest $request, $id){

        $criteria1 = $request->addCriteria1($request->c1);
        DB::beginTransaction();

        try {
            $alternative = Alternative::findOrFail($id);
            $alternative->update([
                'name' => $request->name,
            ]);

            $alternative->values()->where('criteria_id', 1)->update([
                'value' => $criteria1,
            ]);

            $alternative->values()->where('criteria_id', 2)->update([
                'value' => $request->c2,
            ]);

            $alternative->values()->where('criteria_id', 3)->update([
                'value' => $request->c3,
            ]);

            $alternative->values()->where('criteria_id', 4)->update([
                'value' => $request->c4,
            ]);

            $alternative->values()->where('criteria_id', 5)->update([
                'value' => $request->c5,
            ]);

            $alternative->values()->where('criteria_id', 6)->update([
                'value' => $request->c6,
            ]);

            $alternative->values()->where('criteria_id', 7)->update([
                'value' => $request->c7,
            ]);

            DB::commit();
            return redirect()->to('/')->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return redirect()->to('/add-data')->with('error', 'Data gagal diupdate');
        }
    }

    public function getNameAlternative(array $data)  {
        $kedekatan = [];
        foreach ($data as $key => $value) {
            $kedekatan[] = [
                'alternative_id' => $key,
                'value' => $value,
            ];
        }

        $dataKedekatan = [];
        foreach ($kedekatan as $key => $value) {
            $dataKedekatan[] = [
                'alternative_id' => $value['alternative_id'],
                'value' => $value['value'],
                'alternative' => Alternative::find($value['alternative_id'])->name,
            ];
        }

        return $dataKedekatan;
    }

    public function delete($id) {
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();

        return redirect()->to('/')->with('success', 'Data berhasil dihapus');
    }
}
