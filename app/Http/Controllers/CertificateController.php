<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certificate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CertificateController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $certificates = Certificate::latest()->paginate(5);
        return view('certificate.index', compact('certificates', 'categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('certificate.create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'gen_id'=>'required',
            'cat_id'=>'required'
        ]);

        Certificate::insert([
            'name'=>$request->name,
            'gen_id'=>$request->gen_id,
            'cat_id'=>$request->cat_id,
            'created_at'=>Carbon::now()
        ]);
        Session::flash('message', 'Create Successfully');
        return redirect()->route('certificate.index');
    }

    public function edit(Certificate $certificate){
        $certificate['certificates'] = $certificate;
        $categories = Category::all();
        return view('certificate.edit', compact('certificate', 'categories'));
    }

    public function update(Request $request, $id){
        Certificate::find($id)->update([
            'name'=>$request->name,
            'gen_id'=>$request->gen_id,
            'cat_id'=>$request->cat_id,
            'updated_at'=>Carbon::now()
        ]);
        Session::flash('message', 'Updated Successfully');
        return redirect()->route('certificate.index');
    }

    public function delete($id){
        Certificate::find($id)->delete();
        Session::flash('message', 'Deleted Successfully');
        return redirect()->back();
    }

    public function show($id){
        $certificate = Certificate::find($id);
        return view('certificate.certificate', compact('certificate'));
    }

    public function search(){
        
            return view('certificate.search');
      
    }

    public function verified(Request $request){
         $certificate = Certificate::where('gen_id', $request->gen_id)->first();
         if($certificate){
             return view('certificate.certificate', compact('certificate'));
         }else{
            Session::flash('message', 'Certificate Not Found');
            return view('certificate.notFound');
         }
    }
}
