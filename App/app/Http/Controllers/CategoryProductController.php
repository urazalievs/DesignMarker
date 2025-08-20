<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        return $category->products()->cursorPaginate(25);
    }

    public function show($categoryId)
    {
        // Logic to show products in a specific category
    }

    public function store(Request $request)
    {
        // Logic to add a product to a category
    }

    public function update(Request $request, $categoryId, $productId)
    {
        // Logic to update a product in a category
    }

    public function destroy($categoryId, $productId)
    {
        // Logic to remove a product from a category
    }
}
