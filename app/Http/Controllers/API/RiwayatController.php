<?php


namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
   
    public function index()
    {
        if(auth()) {
            $riwayat = Riwayat::with('penyakit')
                ->latest()
                ->paginate(10);
        } else {
            $riwayat = auth()->user()
            ->riwayats()
            ->with('penyakit')
            ->latest()
            ->paginate(10);
        }
        return response()->json($riwayat);
        
    }

    public function show(Riwayat $riwayat)
    {
        $this->authorize('show', $riwayat);
        return response()->json($riwayat);
    }
}
