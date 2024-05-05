<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order as Order;
use App\Models\Report as Report;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function home()
    {
        $title = "Homepage";
        return view('index', compact('title'));
    }
    public function shop()
    {
        $title = "Shop";
        return view('shop', compact('title'));
    }
    public function checkout($package)
    {
        $title = "Checkout";
        return view('checkout', ['package' => $package], compact('title'));
    }
    public function SaveOrder($lol)
    {
        $result = Order::where('user_id', Auth::User()->id)
            ->where('status', 'pending')
            ->exists();
        if (!$result) {
            $order = new Order;
            $order->user_id = Auth::User()->id;
            $order->firstname = request('firstname');
            $order->lastname = request('lastname');
            $order->email = request('email');
            $order->address = request('address');
            $order->address2 = request('address2');
            $order->bundle_type = $lol;
            $order->status = 'pending';

            $order->save();

            return redirect(route('home'))->with('message', 'Your Order has been confirmed');
        } else {
            return redirect(route('home'))->with('message', 'Sorry you already have a pending Order');
        }
    }
    public function report()
    {
        $title = "Report";
        return view('report', compact('title'));
    }
    public function coming()
    {
        $title = "Coming Soon";
        return view('errors.coming', compact('title'));
    }
    public function getReport()
    {
        $report = new Report;
        $report->from = Auth::user()->name;
        $report->report = request('report');

        $report->save();

        return redirect(route('home'))->with('message', 'Your report has been submitted');
    }
}
