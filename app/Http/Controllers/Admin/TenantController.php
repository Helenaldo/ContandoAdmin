<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index() {

        $tenants = Tenant::paginate(10);
        $activeRoute = 'tenants';

        return view('admin.tenant-listar', [
            'tenants' => $tenants,
            'activeRoute' => $activeRoute
        ]);
    }
}
