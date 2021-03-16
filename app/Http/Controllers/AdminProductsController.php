<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::all();
        $products= Product::with(['productcategory','brand','photo','tags'])->paginate(10);
        return view('admin.products.index', compact('products','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands= Brand::pluck('name', 'id')->all();
        $productcategories = ProductCategory::pluck('name', 'id')->all();
        $tags = Tag::pluck('name','id')->all();
        return view('admin.products.create', compact('tags','brands','productcategories'));
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
       // ddd($request);
        $input = $request->all();
        $user = Auth::user();
        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/products', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug']= Str::slug($request->title, '-');
        //$userposts = $user->posts()->create($input);
        $product= Product::create($input);

        $tags = $request->tag_id;


        foreach($tags as $tag){

            $tagfind = Tag::findOrFail($tag);

            $product->tags()->save($tagfind);
        }
        return redirect('/admin');

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

    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::where('brand_id', $id)->paginate(10);
        return view('admin.products.index', compact('brands', 'products'));
    }
}
