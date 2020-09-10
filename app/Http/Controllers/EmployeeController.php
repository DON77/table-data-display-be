<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $model;

    public function __construct(Employee $employee)
    {
        $this->model = $employee;
    }

    public function all(Request $request) {
        $orderDirection = $request->input('order_direction') ?: 'asc';
        $orderBy = $request->input('order_by') ?: 'id';
        $limit = $request->input('limit') ?: 15;

        $employees = $this->model->orderBy($orderBy, $orderDirection)->paginate($limit);

        return collect([
            'order_by' => $orderBy,
            'order_direction' => $orderDirection,
            'limit' => $limit
        ])->merge($employees);
    }
}
