<?php

namespace App\Exports;

use App\Models\backend\Question;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionExport implements FromCollection , WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Question::all();
    }

    public function headings(): array
    {
        return ['id', 'type',"topic", "question","serial_no","set_no","answer_key","difficulty_rating","status",
        "correct_ans","created_at","updated_at"
    ];
    }
}
