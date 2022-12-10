<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyValidatorRequest;
use App\Http\Requests\CompanyValidatorUpdateRequest;
use Illuminate\Support\Facades\File; 

use Intervention\Image\ImageManagerStatic as Image;

class CompaniesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Auth::check()) {
            $companies = Company::orderBy('id', 'desc')->paginate(15);
            $totalCompanies = Company::count();
            return view('companies.index', compact('companies', 'totalCompanies'));
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyValidatorRequest $request) {
        if (Auth::check()) {
            // validate
            $validated = $request->validated();
           
            $company = Company::create([
                        'name' => $request->input('name'),
                        'establishmentDate' => $request->input('establishmentDate'),
                        'employeesNb' => $request->input('employeesNb'),
                        'street' => $request->input('street'),
                        'city' => $request->input('city'),
                        'state' => $request->input('state'),
                        'email' => $request->input('email'),
                        'website' => $request->input('website'),
                        'about' => $request->input('about')
            ]);
            if ($company) {
                return redirect()->route('companies.show', ['company' => $company->id])->with('success', 'Company Created Successfully');
            }
        }
        return back()->withInput()->with('errors', 'Could not create Company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company) {
        $company = Company::find($company->id);
        return view('companies.show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company) {
        $company = Company::find($company->id);
        return view('companies.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyValidatorUpdateRequest $request, Company $company) {
         if (Auth::check()){
            // validate
            $validated = $request->validated();
            
            $companyUpdate = Company::where('id', $company->id)->update([
                        'name' => $request->input('name'),
                        'establishmentDate' => $request->input('establishmentDate'),
                        'employeesNb' => $request->input('employeesNb'),
                        'street' => $request->input('street'),
                        'city' => $request->input('city'),
                        'state' => $request->input('state'),
                        'email' => $request->input('email'),
                        'website' => $request->input('website'),
                        'about' => $request->input('about')
            ]);
          
            if ($companyUpdate) {
                return redirect()->route('companies.show', ['company' => $company->id])->with('success', 'Company Updated Successfully');
            }
         }
        
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company) {
         if (Auth::check()){
            $findCompany = Company::find($company->id);
            if ($findCompany->delete()) {
                return redirect('companies')->with('success', 'Company Deleted Successfully');
            }
         }
        
        return back()->with('errors', 'Company Could Not Be deleted');
    }

   

}