<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCriteriaValueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'c1' => 'sometimes|numeric',
            'c2' => 'sometimes|string',
            'c3' => 'sometimes|string',
            'c4' => 'sometimes|string',
            'c5' => 'sometimes|string',
            'c6' => 'sometimes|string',
            'c7' => 'sometimes|string',
        ];
    }

    public function addCriteria1($value): int | null{

        if ($value >= 300000 && $value < 500000) {
            return 50;
        } elseif ($value >= 500000 && $value < 700000) {
            return 40;
        } elseif ($value >= 700000 && $value < 1000000) {
            return 30;
        } elseif ($value >= 1000000 && $value < 1500000) {
            return 20;
        } elseif ($value >= 1500000) {
            return 10;
        }

        return null;
    }

    public function addCriteria2($value): int | null{

        if ($value == 2017) {
            return 10;
        } elseif ($value == 2018) {
            return 20;
        } elseif ($value == 2019) {
            return 30;
        } elseif ($value == 2020) {
            return 40;
        } elseif ($value == 2021) {
            return 50;
        }

        return null;
    }

    public function addCriteria3($value): int | null{

        if ($value == 'Sneakers') {
            return 50;
        } elseif ($value == 'SlipOn') {
            return 40;
        } elseif ($value == 'LowCut') {
            return 30;
        } elseif ($value == 'HighCut') {
            return 20;
        } elseif ($value == 'Heels') {
            return 10;
        }

        return null;
    }

    public function addCriteria4($value): int | null{

        if ($value == 'Casual') {
            return 50;
        } elseif ($value == 'Running') {
            return 40;
        } elseif ($value == 'Training') {
            return 30;
        } elseif ($value == 'Sporty') {
            return 20;
        } elseif ($value == 'Formal') {
            return 10;
        }

        return null;
    }

    public function addCriteria5($value): int | null{

        if ($value == 'Tekstil') {
            return 70;
        } elseif ($value == 'Canvas') {
            return 60;
        } elseif ($value == 'Sintetis') {
            return 50;
        } elseif ($value == 'Mesh') {
            return 40;
        } elseif ($value == 'Knit') {
            return 30;
        } elseif ($value == 'Leather') {
            return 20;
        } elseif ($value == 'Suede') {
            return 10;
        }

        return null;
    }

    public function addCriteria6($value): int | null{

        if ($value == 'Normal') {
            return 10;
        } elseif ($value == 'Diskon') {
            return 20;
        }

        return null;
    }

    public function addCriteria7($value): int | null{

        if ($value == 'Unisex') {
            return 30;
        } elseif ($value == 'Man') {
            return 20;
        }elseif($value == 'Woman') {
            return 10;
        }

        return null;
    }
}
