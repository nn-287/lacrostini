<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\BusinessSetting;
use App\Model\Coupon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function add_new()
    {
        $coupons = Coupon::latest()->paginate(20);
        return view('admin-views.coupon.index', compact('coupons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'start_date' => 'required',
            'expire_date' => 'required',
            'discount' => 'required'
        ]);

        DB::table('coupons')->insert([
            'title' => $request->title,
            'code' => $request->code,
            'limit' => $request->limit,
            'coupon_type' => $request->coupon_type,
            'start_date' => $request->start_date,
            'expire_date' => $request->expire_date,
            'min_purchase' => $request->min_purchase != null ? $request->min_purchase : 0,
            'max_discount' => $request->max_discount != null ? $request->max_discount : 0,
            'discount' => $request->discount_type == 'amount' ? $request->discount : $request['discount'],
            'discount_type' => $request->discount_type,
            'status' => 1,
            'visibility' => $request->visibility,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Toastr::success('Coupon added successfully!');
        return back();
    }

    public function edit($id)
    {
        $coupon = Coupon::where(['id' => $id])->first();
        return view('admin-views.coupon.edit', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'start_date' => 'required',
            'expire_date' => 'required',
            'discount' => 'required'
        ]);

        DB::table('coupons')->where(['id' => $id])->update([
            'title' => $request->title,
            'code' => $request->code,
            'limit' => $request->limit,
            'coupon_type' => $request->coupon_type,
            'start_date' => $request->start_date,
            'expire_date' => $request->expire_date,
            'min_purchase' => $request->min_purchase != null ? $request->min_purchase : 0,
            'max_discount' => $request->max_discount != null ? $request->max_discount : 0,
            'discount' => $request->discount_type == 'amount' ? $request->discount : $request['discount'],
            'discount_type' => $request->discount_type,
            'visibility' => $request->visibility,
            'updated_at' => now()
        ]);

        Toastr::success('Coupon updated successfully!');
        return back();
    }

    public function status(Request $request)
    {
        $coupon = Coupon::find($request->id);
        $coupon->status = $request->status;
        $coupon->save();
        Toastr::success('Coupon status updated!');
        return back();
    }

    public function delete(Request $request)
    {
        $coupon = Coupon::find($request->id);
        $coupon->delete();
        Toastr::success('Coupon removed!');
        return back();
    }

   //// Loyality and detention coupons

    public function edit_custom_coupon()
    {
        $loyality_coupon = json_decode(BusinessSetting::where(['key'=>'loyality_coupon'])->first()->value, true);
        $detention_coupon = json_decode(BusinessSetting::where(['key'=>'detention_coupon'])->first()->value, true);
        return view('admin-views.coupon.custom.edit', compact('loyality_coupon', 'detention_coupon'));
    }

    public function update_custom_coupon(Request $request)
    {
        BusinessSetting::where(['key' => 'loyality_coupon'])->update([
            'value' => json_encode([
                "status" => $request['loyality_status'],
                "loyality_discount" => $request['loyality_discount'],
                "loyality_orders_number" => $request['loyality_orders_number']
            ]),
        ]);

        BusinessSetting::where(['key' => 'detention_coupon'])->update([
            'value' => json_encode([
                "detention_discount" => $request['detention_discount'],
                "detention_days_number" => $request['detention_days_number'],
                "status" => $request['detention_status']
            ]),
        ]);
        Toastr::success('Updated successfully!');
        return back();
    }
}
