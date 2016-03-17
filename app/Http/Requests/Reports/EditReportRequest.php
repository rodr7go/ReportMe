<?php

namespace App\Http\Requests\Reports;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditReportRequest extends Request
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
            'subject' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'admin_id' => 'required',
        ];
    }
}
