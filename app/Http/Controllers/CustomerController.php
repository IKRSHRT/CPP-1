<?php

namespace App\Http\Controllers;

use App\Models\Customer\Customer; // 名前空間を修正
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        if (auth()->user()->isSuperVisor()) {
            $customers = Customer::paginate();
        } else {
            $customers = Customer::where('shop_id', auth()->user()->shop_id)->paginate();
        }
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|integer',
            'shop_id' => 'required|integer',
            'memo' => 'nullable|string',
        ]);

        $customer = new Customer($validated);
        $customer->password = bcrypt($request->password);
        $customer->save();

        return redirect()->route('customers.index')->with('success', '顧客が作成されました');
    }

    public function show(Customer $customer)
    {
        $this->authorize('view', $customer);
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers,email,' . $customer->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role_id' => 'required|integer',
            'shop_id' => 'required|integer',
            'memo' => 'nullable|string',
        ]);

        $customer->fill($validated);
        if ($request->filled('password')) {
            $customer->password = bcrypt($request->password);
        }
        $customer->save();

        return redirect()->route('customers.index')->with('success', '顧客が更新されました');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', '顧客が削除されました');
    }
}