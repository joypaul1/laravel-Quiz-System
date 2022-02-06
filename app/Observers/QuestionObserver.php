<?php

namespace App\Observers;


use App\Models\backend\Question;
use Carbon\Carbon;

class QuestionObserver
{
    /**
     * Handle the Question "created" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function created(Question $question)
    {
        $question->created_at = Carbon::now();
        $question->updated_at = Carbon::now();
    }

    /**
     * Handle the Question "updated" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function updated(Question $question)
    {
        $question->updated_at = Carbon::now();
    }

    /**
     * Handle the Question "deleted" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function deleted(Question $question)
    {
        //
    }

    /**
     * Handle the Question "restored" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function restored(Question $question)
    {
        //
    }

    /**
     * Handle the Question "force deleted" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function forceDeleted(Question $question)
    {
        //
    }
}
