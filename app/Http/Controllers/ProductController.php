<?php

namespace App\Http\Controllers;

use App\Mail\OrderRequestMail;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show', 'byCategory');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        
    

       
        return view('product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'description' => 'required|min:10',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category' => 'required'
        ]);

        Product::create([
            'name'=> $request->input('name'),
            'description' => $request->input('description'),
            'body' => $request->input('body'),
            'img' => $request->file('image')->store('public/img'),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('products'))->with('message', 'Article inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|unique:products,name,' . $product->id,
            'body' => 'required|min:10',
            'image' => 'image',
            'category' => 'required'
        ]);

        $product->update([
            'name'=> $request->name,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $request->image,
            'category_id' => $request->category,
        ]);

        if($request->image){
            Storage::delete($product->img);
            $product->update([
                'img' => $request->file('image')->store('app/public_html/img'),
            ]);
        }
        return redirect(route('admin.dashboard'))->with('message', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('admin.dashboard'))->with('message', 'Product eliminated correctly');
    }

    public function byCategory(Category $category){
        $products = $category->products->sortByDesc('created_at');
        return view('product.byCategory', compact('category', 'products'));
    }

    public function order(Request $request){
        
        $products = Product::all();
        
        return view('order', compact('products'));
    }

    public function orderSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            
            'orders' => 'nullable|array',
            'orders.*' => 'present',
            'quantities' => 'nullable|array',
            'quantities.*' => 'present'
        ]);

        

        $user = Auth::user();
        $email = $request->email;
        $message = $request->message;
        $orders = $request->input('orders');
        $quantities = $request->input('quantities');

        Mail::to('piombidivale@gmail.com')->send(new OrderRequestMail(compact('orders', 'email', 'message', 'quantities')));

        return redirect(route('welcome'))->with('message', 'A breve la contatteremmo');
    }
}
