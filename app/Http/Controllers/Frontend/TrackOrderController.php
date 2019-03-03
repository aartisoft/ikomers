<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rajaongkir;
use Session;

class TrackOrderController extends Controller
{
    function index() {
        return view('frontend.track-order');
    }

    function getStates(Request $request) {
        $provinces = RajaOngkir::Provinsi()->getList();
        return response()->json($provinces);
    }

    function getCities(Request $request) {
        $cities = RajaOngkir::Kota()->byProvinsi($request->id)->get();
        $list = [];
		foreach($cities as $k => $v) {
                $list[$v['city_id']] = $v['city_name'];
        }
        return response()->json($list);
    }

    function getSubdistricts(Request $request) {
        $cities = RajaOngkir::Kecamatan()->byCity($request->id)->get();
        $list = [];
		foreach($cities as $k => $v) {
                $list[$v['subdistrict_id']] = $v['subdistrict_name'];
        }
        return response()->json($list);
    }

    function getCost(Request $request) {
        $cost = RajaOngkir::Cost([
            'origin' 		=> 501, // id kota asal
            'originType'    => 'city',
            'destination' 	=> 114, // id kota tujuan
            'destinationType'=> 'city',
            'weight' 		=> 1700, // berat satuan gram
            'courier' 		=> 'jne', // kode kurir pengantar ( jne / tiki / pos )
        ])->get();
        return response()->json($cost);
    }

    function updateCost(Request $request) {
        Session::put(['shipping.shipping_cost'=>$request->shipping_cost,'shipping.shipping_type'=>$request->shipping_type]);
    }

    function getWaybill(Request $request) {
        $waybill = RajaOngkir::Waybill([
            'waybill' 		=> $request->waybill, // id kota asal
            'courier' 		=> $request->courier, // kode kurir pengantar ( jne / tiki / pos )
        ])->get();
        return response()->json($waybill);
    }
}
