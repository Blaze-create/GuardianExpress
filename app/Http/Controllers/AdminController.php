<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as User;
use App\Models\Order as Order;
use App\Models\Report as Report;


class AdminController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        if (Auth::user()->usertype == 'admin') {
            $user = User::all();
            $order = Order::all();
            $report = Report::all();
            return view('admin/index', [
                'users' => $user,
                'orders' => $order,
                'reports' => $report
            ], compact('title'));
        } else {
            return redirect(route('home'));
        }
    }
    function suspend()
    {
    }
    public function destroyUser($id)
    {
        if (Auth::user()->usertype == 'admin') {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect(route('dashboard'))->with('message', 'User Account has been sucessfully deleted');
        } else {
            return redirect(route('home'));
        }
    }
    function makeadmin($id)
    {
        if (Auth::user()->usertype == 'admin') {
            User::where('id', $id)->update(['usertype' => 'admin']);
            return redirect(route('dashboard'))->with('message', 'User Account has been sucessfully upgrade to Admin level');
        } else {
            return redirect(route('home'));
        }
    }
    function removeadmin($id)
    {
        if (Auth::user()->usertype == 'admin') {
            User::where('id', $id)->update(['usertype' => 'user']);
            return redirect(route('dashboard'))->with('message', 'User Account has been sucessfully revoked of Admin level');
        } else {
            return redirect(route('home'));
        }
    }
    function completeOrder($id)
    {
        if (Auth::user()->usertype == 'admin') {
            Order::where('id', $id)->update(['status' => 'complete']);
            return redirect(route('dashboard'))->with('message', 'User Order has been sucessfully completed');
        } else {
            return redirect(route('home'));
        }
    }
    function destroyOrder($id)
    {
        if (Auth::user()->usertype == 'admin') {
            $order = Order::findOrFail($id);
            $order->delete();
            return redirect(route('dashboard'))->with('message', 'User Order has been sucessfully deleted');
        } else {
            return redirect(route('home'));
        }
    }
}
