<?php

namespace App\Http\Controllers;

use App\Features\RewardGatewayApiService;
use Exception;
use Log;

class EmployeeController extends Controller
{
    public function index()
    {
        try {
            $employees = RewardGatewayApiService::getEmployees();
            return view('welcome', ['employees' => $employees]);
        } catch (Exception $e) {
            return view('error');
        }
    }
}
