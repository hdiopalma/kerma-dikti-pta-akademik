<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Reviewer;

class ReviewerController extends Controller
{
    public function index()
    {
        return view('admin.reviewer.index');
    }

    public function show(){
        $reviewer = Reviewer::all();
        return view('admin.reviewer.show', ['reviewer' => $reviewer]);
    }

    public function edit(Reviewer $reviewer){
        return view('admin.reviewer.edit', compact('reviewer'));
    }

    public function update(Request $request, Reviewer $reviewer){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Reviewer::where('id', $reviewer->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
        return redirect('/admin/reviewer')->with('status', 'Data reviewer berhasil diubah!');
    }

    public function destroy(Reviewer $reviewer){
        Reviewer::destroy($reviewer->id);
        return redirect('/admin/reviewer')->with('status', 'Data reviewer berhasil dihapus!');
    }

    public function reviewerJson(){
        
            $reviewer = Reviewer::all();
            return datatables()->of($reviewer)->toJson();
        
    }
}
