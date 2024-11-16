<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Blog;
use App\Models\Materi;
use App\Models\PO;
use App\Http\Requests\PoRequest;
use Barryvdh\DomPDF\Facade\Pdf;


class HomeController extends Controller
{
    
    public function __construct(){
        
       
    }
    public function index(){
        
        return view('Pages.Frontend.Home')->with([
            
            ]);
    }
    
    public function sendPo(PoRequest $poRequest){
        $data = $poRequest->validated();
        $po = PO::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'origin' => $data['origin'],
            'tgl_pelaksanaan' => $data['tgl_pelaksanaan'],
            'paket' => $data['paket'],
            'person' => $data['person'],
            'item' => $data['item'],
        ]);
    
        // Redirect to the 'fe-success' route with the 'id' parameter
        return redirect()->route('fe-success', ['id' => $po->id])->with('pesan', 'Data berhasil ditambahkan!');
    }

    
    public function success($id){
        
       $query = PO::find($id);

        return view('Frontend.Success', [
            'title' => 'Print Booking | Luxury Palace Oman',
            'dataBooking' => $query,
        ]);

    }
    
    public function reportBookingPrint($id)
        {
            $dataBooking = PO::find($id);
        
            if ($dataBooking) {
                $pdf = PDF::loadview('Frontend.report-print', ['dataCetak' => $dataBooking])->setPaper('a4', 'portrait');
                return $pdf->stream('invoice-booking-luxury.pdf');
            } else {
                // Handle the case where the record doesn't exist, e.g., show an error message or redirect to an error page.
            }
        }

        
    
    


}