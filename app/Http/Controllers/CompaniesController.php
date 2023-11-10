<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
//     public function store(StoreCompanyRequest $request)
// {
//     abort_unless(\Gate::allows('company_create'), 403);
//     $company = companies::create($request->all());
//     return redirect()->route('admin.companies.index');
// }
}
