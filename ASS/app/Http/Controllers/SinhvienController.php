<?php

namespace App\Http\Controllers;

use index;
use App\Models\Sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //lấy thông tin sv trả cho view index

        $sinhvien = Sinhvien::paginate(5);
        return view("index", compact('sinhvien'))->with('i', (request()->input('page', 1) -1) *5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Thêm sinh viên thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sinhvien = Sinhvien::find($id);
        return view('show',compact('sinhvien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sinhvien $sinhvien)
    {
        return view('edit', compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sinhvien $sinhvien)
    {
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sinhvien $sinhvien)
    {
        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao','Xóa thành công');
    }
    public function search(Request $request)
    {
        $sinhvien = Sinhvien::where('hoten', 'like', '%' . $request->search . '%')->get();
        return view('index', compact('sinhvien'));
    }
}
