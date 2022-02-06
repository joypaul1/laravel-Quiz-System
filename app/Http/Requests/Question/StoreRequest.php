<?php

namespace App\Http\Requests\Question;

use App\Models\backend\Question;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question' => 'required',
            'topic' => 'required',
            'serial_no' => 'required',
            'set_no' => 'required',
            'answer_key' => 'required',
            'difficulty_rating' => 'required',
        ];
    }

    public function setInputData()
    {
        $field = Schema::getColumnListing('questions');
        unset( $field[array_search( 'created_at', $field )] );
        unset( $field[array_search( 'updated_at', $field )] );
        return $field;
    }

    public function storeData($request)
    {
        try {
            DB::beginTransaction();
            $value = $request->only($this->setInputData());
            $value['answer_key'] = json_encode($request->answer_key);
            $question = Question::create($value);
            if ($request->options) {
                for ($i=0; $i < count($request->options); $i++) {
                    $v = $question->options()->create([
                        'option' => $request->options[$i],
                        'key' => $this->setKey($i),
                    ]);

                }
            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            return $ex->getMessage();
        }
        return true;
    }


    public function updateData($request, $question)
    {
        try {
            DB::beginTransaction();
            $value = $request->only($this->setInputData());
            $value['answer_key'] = ($request->answer_key);
            $question->update($value);
            if ($request->options) {
                for ($i=0; $i < count($request->options); $i++) {
                    $question->options()->where('key', $this->setKey($i))->update([
                        'option' => $request->options[$i],
                    ]);
                }
            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            return $ex->getMessage();
        }
        return true;
    }

    private function setKey($i)
    {
        $key= '';
        switch ($i) {
            case '0':
                $key = 'A';
                break;
            case '1':
                $key = 'B';
                break;
            case '2':
                $key = 'C';
                break;
            case '3':
                $key= 'D';
                break;
            case '4':
                $key= 'E';
                break;
            case '5':
                $key= 'F';
                break;

        }
        return $key;
    }
}
