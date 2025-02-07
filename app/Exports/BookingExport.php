<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingExport  implements FromCollection, WithHeadings
{
    /**
     * Return a collection of booking data.

     *
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        return Booking::select([
            'id',
            'name',
            'email',
            'date',
            'members',
            'place',
            'TourCode'
        ])->get();
    }

    /**
     * Define Excel headers.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Date',
            'Members',
            'Place',
            'Tour Code'
        ];
    }
}
