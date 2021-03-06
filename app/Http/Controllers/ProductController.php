<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //halaman utama
    public function index()
    {
        /*
            request disini adalah untuk mencari dan meminta sebuape
            apakah sebuah halaman disini
            mempunyai sebuah JQuery di dalamnya */
        if (request()->ajax()) {
            //mengambil data dari database model
            $query = Product::query();
            /*
                mengembalikan nilai model untuk dimasukkan
                ke dalam proses datatabel */
            return DataTables::of($query)
                // menambahkan column dengan fungsi yang sudah ditentukan
                ->addColumn('action', function ($items) {
                    /* mendesain tampilan kolom dengan tailwind */
                    return '

                    <div class="container ">
                        <div class="grid gap-4 gap-x-2 gap-y-2 ">
                            <div class="grid-cols-12">
                            <a
                    class="px-2 py-1 mx-3 font-serif font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700"
                    href="' . route('dashboard.product.gallery.index', $items->id) . '">
                        Gallery
                    </a>
                            <a
                    class="px-2 py-1 mx-3 font-serif font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700"
                    href="' . route('dashboard.product.edit', $items->id) . '">
                        Edit
                    </a>
                    <form action="' . route('dashboard.product.destroy', $items->id) . '" class="inline-block" method="post">
                        <button class="py-1 mx-3 font-serif font-bold text-white bg-gray-500 rounded shadow-lg px- hover:bg-gray-700">
                            Delete
                        </button>
                    ' . method_field('delete') . csrf_field() . '
                    </form>
                            </div>
                        </div>
                    </div>
                    ';
                })
                /*
                    merubah format pada hasil column yang akan ditampilkan
                    pada datatables */
                ->editColumn('price', function ($items) {
                    return number_format($items->price);
                })
                //membuat columns yang ditambahkan oleh addcolumns
                ->rawColumns(['action'])
                //membuat data untuk datatables pada halaman
                ->make();
        };
        return view('pages.dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //tempat membuat halaman
    public function create()
    {
        //memanggil halaman
        return view('pages.Dashboard.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //menyimpan data yang sudah terbuat
    public function store(ProductRequest $request)
    {

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Product::create($data);
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //mengambil data yang ditentukan berdasarkan pilihan
    public function edit(Product $product)
    {
        return view('pages.dashboard.product.edit', ['items' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $product->update($data);
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.product.index');
    }
}
