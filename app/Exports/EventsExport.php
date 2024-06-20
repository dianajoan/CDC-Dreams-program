<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Event;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EventsExport implements FromCollection
{
    public function collection()
    {
        return Event::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Event Type',
            'Learning Outcomes',
            'Start Date',
            'End Date',
            'Created At',
            'Updated At',
        ];
    }
}
