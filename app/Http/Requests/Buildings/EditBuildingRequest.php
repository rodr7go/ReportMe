<?php

namespace App\Http\Requests\Buildings;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditBuildingRequest extends Request
{

    public function __construct(Route $route)
    {
        $this->route = $route;
    }


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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'city'  => 'required',
            'state' => 'required',
            'zip_code' => 'required',
        ];
    }
}
