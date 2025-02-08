<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ดึงรายการสินค้าทั้งหมด
    public function index()
    {
        $product = Product::all();
        return response()->json(Product::all());
    }

    // สร้างสินค้าใหม่
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // ดึงสินค้าตาม ID
    public function show($id)
    {
        return response()->json(Product::findOrFail($id));
    }

    // อัปเดตสินค้า
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    // ลบสินค้า
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }
}