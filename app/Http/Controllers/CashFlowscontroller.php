<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CashFlows;

class CashFlowsController extends Controller
{
    public function index()
    {
        //DBよりCashFlowsテーブルの値を全て取得
$CashFlows = cashflows::all();

//取得した値をビュー「book/index」に渡す
return view('cashflows/index', compact('cashflows'));
    }

    public function edit($id)
    {
        //DBよりURIパラメーターと同じIDを持つcashflowsの情報を取得
        $CashFlows = cash::findorFail($id);

        //  取得した値をビュー「cashflows/edit」に渡す
        return view('cashflows/edi', compact('cashflows'));
    }
}

