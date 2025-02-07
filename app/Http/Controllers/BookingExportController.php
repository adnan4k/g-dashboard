<?php

namespace App\Http\Controllers;

use App\Exports\BookingExport;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BookingExportController extends Controller
{
    /**
     * Export booking data to Excel.
     */
    public function exportExcel()
    {
        return Excel::download(new BookingExport, 'bookings.xlsx');
    }

    /**
     * Export booking data to PDF.
     */
    
    public function exportBookingsPDF()
    {
        // Retrieve all booking records
        $bookings = Booking::select(['id', 'name', 'email', 'date', 'members', 'place', 'TourCode'])->get();
    
        // Load the view and pass booking data
        $pdf = FacadePdf::loadView('pdf.bookings', compact('bookings'));
    
        // Download the generated PDF
        return $pdf->download('bookings.pdf');
    }
    
} 