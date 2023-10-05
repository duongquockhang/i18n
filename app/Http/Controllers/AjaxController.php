<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajaxRequest(Request $request)
    {
        // Xử lý yêu cầu AJAX ở đây
        return response()->json(['status' => 'success', 'message' => 'Yêu cầu AJAX đã được xử lý thành công!']);
    }
}
