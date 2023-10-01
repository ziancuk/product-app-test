<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function list() {
        $product = Product::get();

        return view('dashboard.products', compact('product'));
    }

    public function create(Request $request) {
        $this->validate(
            $request, [
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'harga' => 'required',
        ], [
            'required' => 'Form Tidak Boleh Kosong!',
            'image.max' => 'Ukuran Gambar maksimal 2 mb',
            'image.mimes' => 'Format gambar hanya boleh jpeg, png, dan jpg!',
        ]);
        
        // Get the uploaded file
        
        $uploadedFile = $request->file('image');
        $fileName = str_replace(' ', '', $request->nama) . '_' . time() . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->storeAs('public/products', $fileName);

        $data = $request->except('image');
        $data['gambar'] = $fileName;
        if(!$request->status) {
            $data['status'] = 0;
        }

        Product::create($data);
        return redirect('/products')->with('status', 'Produk berhasil ditambahkan.');
    }

    public function update(Product $product, Request $request) {
        $this->validate(
            $request, [
            'nama' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'harga' => 'required',
        ], [
            'required' => 'Form Tidak Boleh Kosong!',
            'image.max' => 'Ukuran Gambar maksimal 2 mb',
            'image.mimes' => 'Format gambar hanya boleh jpeg, png, dan jpg!',
        ]);

        $data = $request->except('image');

        if($request->file('image')) {
            if (Storage::disk('public')->exists('/products/'.$product->gambar)) {
                Storage::disk('public')->delete('/products/'.$product->gambar);
            }
    
            $uploadedFile = $request->file('image');
            $fileName = str_replace(' ', '', $request->nama) . '_' . time() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->storeAs('public/products', $fileName);
            $data['gambar'] = $fileName;
        } 

        $product->update($data);
        return redirect('/products')->with('status', 'Edit Data berhasil');
    }

    public function edit($id) {
        $data = Product::find($id);
        return view('dashboard.edit_product', compact('data'));
    }

    public function delete(Product $product)
    {
        if (Storage::disk('public')->exists('/products/'.$product->gambar)) {
            Storage::disk('public')->delete('/products/'.$product->gambar);
        }
        $product->delete();
        return redirect('/products')->with('status', 'Data Product Berhasil dihapus');
    }
}
