<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

class OrderController extends Controller
{
    public function index()
    {
        if (request()->has('status_id')){
            return $this->response(OrderResource::collection(auth()->user()->orders()->where('status_id', request('status_id'))->paginate(10))->toArray(request()));
        }
        return $this->response(OrderResource::collection(auth()->user()->orders()->paginate(10))->toArray(request()));
    }
    public function create()
    {
        //
    }

    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $products = [];
        $notFoundProducts = [];
        $address = UserAddress::find($request->address_id);

        foreach ($request['products'] as $requestProduct) {
            $prod = Product::with('stocks')->findOrFail($requestProduct['product_id']);
            $prod['quantity'] = $requestProduct['quantity'];

            if (
                $prod->stocks()->find($requestProduct['stock_id']) &&
                $prod->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']
            ) {
                $productWithStock = $prod->withStock($requestProduct['stock_id']);
                $productResource = new ProductResource($productWithStock);

                $sum += $productResource['price'];
                $products[] = $productResource->resolve();
            } else {
                $requestProduct['weHave'] = $prod->stocks()->find($requestProduct['stock_id'])->quantity;
                $notFoundProducts[] = $requestProduct;
            }
        }

        if ($notFoundProducts === [] && $products !== [] && $sum > 0) {

            // TO DO: add status_id of order
            $order = auth()->user()->orders()->create([
                'comment' => $request->comment,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'sum' => $sum,
                'status_id' => in_array($request['payment_type_id'], [1, 2]) ? 1 : 6,
                'address' => $address,
                'products' => $products,
            ]);

            if (!!$order) {
                foreach ($products as $product){
                    $stock = Stock::find($product['inventory'][0]['id']);
                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                };
            }
            return $this->success('Great!!!!',['order' => new OrderResource($order)]);
        } else {
            return $this->error(
                'Some products are not available in the requested quantity',
                ['notAvailableProducts' => $notFoundProducts]);
        }
    }
    public function show(Order $order)
    {
        return $this->response([new OrderResource($order)]);
    }
    public function edit(Order $order)
    {
        //
    }
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }
    public function destroy(Order $order)
    {
        //
    }
}
