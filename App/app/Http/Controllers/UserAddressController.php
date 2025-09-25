<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Js;

class UserAddressController extends Controller
{
    public function index(): JsonResponse
    {
        $addresses = auth()->user()->addresses()->get()->toArray();
        return $this->response($addresses);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserAddressRequest $request)
    {
        $addresses = auth()->user()->addresses()->create($request->toArray());

        return $this->success('Address created successfully', [$addresses]);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAddress $userAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAddress $userAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
