<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        /*
            request disini adalah untuk mencari dan meminta sebuape
            apakah sebuah halaman disini
            mempunyai sebuah JQuery di dalamnya */
        if (request()->ajax()) {
            //mengambil data dari database model
            $query = ProductGallery::query();
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
                    <form action="' . route('dashboard.product.destroy', $items->id) . '" class="inline-block" method="post">
                        <button class="px-8 py-1 mx-3 font-serif font-bold text-white bg-gray-500 rounded shadow-lg hover:bg-gray-700">
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
                    mengambil sebuah data gambar pada suatu database agar dapat dipanggil  */
                ->editColumn('url', function ($items) {
                    return '<img style="max: width 150px;" src="' . Storage::url($items->url) . '">';
                })
                /*
                    menanyakan status gambar yang terpilih */
                ->editColumn('is_featured', function ($items) {
                    return $items->is_featured ? 'yes' : 'no';
                })
                //membuat columns yang ditambahkan oleh addcolumns
                ->rawColumns(['action'])
                //membuat data untuk datatables pada halaman
                ->make();
        };
        return view('pages.dashboard.gallery.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
