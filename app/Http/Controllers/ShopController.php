<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopStoreRequest;
use App\Http\Requests\ShopUpdateRequest;
use App\Http\Resources\ShopShopAllResource;
use App\Http\Resources\ShopShopSingleResource;
use App\Models\Shop;
use App\Services\ShopService;

class ShopController extends ResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return ShopShopAllResource
     */
    public function index(): ShopShopAllResource
    {
        return $this->success(new ShopShopAllResource(Shop::whereStatus(1)->paginate(15)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShopStoreRequest $request
     * @return ShopShopSingleResource
     */
    public function store(ShopStoreRequest $request): ShopShopSingleResource
    {
        return $this->success(new ShopShopSingleResource((new ShopService())->add($request->all())));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return ShopShopSingleResource
     */
    public function show($id)
    {
        return $this->success(new ShopShopSingleResource(Shop::find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShopUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShopUpdateRequest $request, $id)
    {
        return $this->success(new ShopShopSingleResource((new ShopService())->edit($request->all(), $id)));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shop::find($id)->delete();
        return $this->success();
    }
}
