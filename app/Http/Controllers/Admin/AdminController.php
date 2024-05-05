<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
        $data['header_title'] = 'Admin';
        return view('admin.admin.list', $data);
    }
}