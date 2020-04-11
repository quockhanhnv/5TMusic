<?php

namespace App\Http\Controllers\Client;

use App\Services\OrderService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    protected  $productService;
    protected  $orderService;

    public function __construct(ProductService $productService, OrderService $orderService)
    {
        $this->productService = $productService;
        $this->orderService = $orderService;
    }

    public function index()
    {
        $cartItems = \Cart::content();

        return view('client.pages.shopping.index', compact('cartItems'));
    }

    public function add(Request $request,$id)
    {
        $qty = $request->qty ?? 1;

        $product = $this->productService->findById($id);

        if(!$product) return redirect()->route('home');

        \Cart::add([
            'id' => $product->id,
            'name' => $product->pro_name,
            'qty' => $qty,
            'price' => getPriceSale($product->pro_price, $product->pro_sale),
            'weight' => '1',
            'options' => [
                'original_price' => $product->pro_price,
                'sale' => $product->pro_sale,
                'image' => $product->pro_avatar
            ]
        ]);

        return redirect()->back()->with('message', 'Thêm mới giỏ hàng thành công');
    }

    // when client submir from contains info of us this method is run
    public function postPay(Request $request)
    {
        $userId = Auth::user()->id ?? 0;
        $orderTotalMoney = str_replace(',', '', \Cart::subtotal(0)) ;
        $request->merge(['order_user_id' => $userId, 'order_total_money' => $orderTotalMoney]);
        $this->orderService->insertOrderAndOrderDetails($request->all());
        return redirect()->route('home')->with('message', 'Thanh toán giỏ hàng thành công');
    }
    public function delete($id)
    {
        \Cart::remove($id);
        return redirect()->back()->with('message', 'Xóa giỏ hàng thành công');
    }
}
