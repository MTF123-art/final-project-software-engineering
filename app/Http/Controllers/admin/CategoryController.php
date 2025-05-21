<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category-management.index', [
            'title' => 'Category Management',
            'all' => Kategori::orderBy('id', 'desc')->paginate(5),
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100|unique:kategoris,nama_kategori',
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully');
    }

    public function update(Request $request, $id){
        $request->validate([
            'edit_nama_kategori' => 'required|string|max:100|unique:kategoris,nama_kategori,'.$id,
        ]);

        $category = Kategori::findOrFail($id);
        $category->update([
            'nama_kategori' => $request->edit_nama_kategori,
            'slug' => Str::slug($request->edit_nama_kategori),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');
    }

    public function delete ($id){
        $category = Kategori::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');

    }
}
