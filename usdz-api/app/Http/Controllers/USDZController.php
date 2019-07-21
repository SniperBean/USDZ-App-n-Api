<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class USDZController extends Controller
{
    /**
     * @SWG\GET(
     *   path="/usdz/search/GET",
     *   summary="上傳圖片搜尋",
     *   @SWG\Parameter(name="name", in="query", required=true, type="string"),
     *   @SWG\Response(response=200, description="請求成功"),
     *   @SWG\Response(response=400, description="請求失敗"),
     *   @SWG\Response(response=419, description="未知的狀況")
     * )
     * @return \Illuminate\Http\JsonResponse
     */

    public function getUSDZ(Request $request)
    {
        return response()->json("Test", 200);
    }
}
