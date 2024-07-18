<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3000/parking-lot-transactions');
        $transactions = $response->json();
        return view('admin.reportPage', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['plate_car', 'entry_time', 'out_time', 'id_user']);
        $response = Http::post('http://localhost:3000/parking-lot-transactions', $data);
        if ($response->successful()) {
            return redirect()->route('transactions.index')->with('success', 'Transaction created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create transaction.');
        }
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:3000/parking-lot-transactions/{$id}");
        $transaction = $response->json();
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['plate_car', 'entry_time', 'out_time', 'id_user']);
        $response = Http::patch("http://localhost:3000/parking-lot-transactions/{$id}", $data);
        if ($response->successful()) {
            return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update transaction.');
        }
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:3000/parking-lot-transactions/{$id}");
        if ($response->successful()) {
            return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete transaction.');
        }
    }
    
    public function downloadPdf()
    {
        $response = Http::get('http://localhost:3000/parking-lot-transactions');
        $transactions = $response->json();
        // return view('admin.reportPage', compact('transactions'));

        // $pdf = PDF::loadView('admin.reportPage', compact('transactions'));
        $pdf = PDF::loadView('admin.pdf', compact('transactions'));
        
        return $pdf->download('transactions.pdf');
    }
}