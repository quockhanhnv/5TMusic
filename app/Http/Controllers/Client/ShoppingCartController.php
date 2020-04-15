<?php

namespace App\Http\Controllers\Client;

use App\Mail\OrderSuccessfully;
use App\Services\OrderService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

        if($product->pro_stock_quantity < 1) {
            Session::flash('toastr', [
                'type'    => 'error',
                'message' => 'Số lượng sản phẩm không đủ'
            ]);
            return redirect()->back();
        }
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
        //4. Thông báo
        Session::flash('toastr', [
            'type'    => 'success',
            'message' => 'Thêm giỏ hàng thành công'
        ]);

        return redirect()->back();
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

    public function update(Request $request, $id) // update bằng ajax khi ở form thanh toán thay đổi số lượng
    {

        if($request->ajax()) {
            $qty = $request->qty ?? 1;
            $cartId = $request->cartId;
            $productId = $request->productId;
            $product = $this->productService->findById($productId);
            if(!$product) return response(['message' => 'Không tồn tại sản phẩm']);
            if($product->pro_stock_quantity < $qty) return response(['message' => 'Số lượng sản phẩm không đủ']);
            \Cart::update($cartId, $qty);
            $newSubTotal = \Cart::subtotal(0);

            return response([
                'message' => 'Cập nhật giỏ hàng thành công',
                'newCartSubTotal' => $newSubTotal // response lại tổng giỏ hàng mới để bên kia dùng ajax cập nhật lại
            ]);
        }
    }
    public function delete($id)
    {
        \Cart::remove($id);
        return redirect()->back()->with('message', 'Xóa giỏ hàng thành công');
    }
}
