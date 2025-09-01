<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethods;
use App\Http\Requests\StoreDeliveryMethodsRequest;
use App\Http\Requests\UpdateDeliveryMethodsRequest;
use Illuminate\Support\Collection;

class DeliveryMethodsController extends Controller
{
    public function index(): Collection
    {
        return DeliveryMethods::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeliveryMethodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DeliveryMethods $deliveryMethods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryMethods $deliveryMethods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeliveryMethodsRequest $request, DeliveryMethods $deliveryMethods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeliveryMethods $deliveryMethods)
    {
        //
    }
}
