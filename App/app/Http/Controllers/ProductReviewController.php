<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;

class ProductReviewController extends Controller
{
    public function index(Product $product)
    {
        return $this->response([
            'overall_rating' => round($product->reviews()->avg('rating'), 1),
            'reviews_count' => $product->reviews()->count(),
            'reviews' => $product->reviews()->with('user')->paginate(10)->toArray(),
        ]);
    }

    public function store(Product $product, StoreReviewRequest $request){
        $review = $product->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'body' => $request->body,
        ]);
        return $this->success('Review added successfully', [$review]);
    }

}
