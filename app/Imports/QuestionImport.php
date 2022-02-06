<?php

namespace App\Imports;

use App\Models\backend\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if($row['set_no'] == 'Set 1'){
            $set_no =  1;
        }else{
            $set_no = 2;
        }
        $type= $row['type'];

        // dd($row);
        // return Question::insert([
        //     'type'     =>  $type,
        //     'topic'     => $row['topic'],
        //     'question'     => $row['question'],
        //     'serial_no' => $row['serial_no'],
        //     'set_no'    => $set_no,
        //     'answer_key' => json_encode($row['answer_key']),
        //     'difficulty_rating' => $row['difficulty_rating'],
        //     'correct_ans' => $row['correct_ans'],
        //     'status' =>true,
        // ]);
        return new Question([
            'type'     => $type,
            'topic'     =>'1.1: topic description',
            'question'     =>'This is question stem',
            'serial_no' => $row['serial_no'],
            'set_no'    => $set_no,
            'answer_key' => json_encode($row['answer_key']),
            'difficulty_rating' => $row['difficulty_rating'],
            'correct_ans' => $row['correct_ans'],
            'status' =>true,
        ]);
    }
}
