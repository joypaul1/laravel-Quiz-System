<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\BannerModel;
use App\Models\backend\Introduction;
use App\Models\backend\Question;
use App\Models\backend\UserAnswerSheet;
use App\Models\backend\Workshop;
use App\Models\Survey;
use App\Models\User;
use App\Models\UserSurveyAnswer;
use Carbon\Carbon;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $BannerModel = BannerModel::where('type', 'home_slider')->get();
        return view('frontend.index', compact('BannerModel'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function userDashboard()
    {
        $set_one_r_one_d_r = $this->set_one_r_d_r(1, 1, 'set_rone_submit');


        $set_two_r_one_d_r  = $this->set_one_r_d_r(2, 1, 'set_two_rone_submit');

        $totalUser = User::where([
            ['set_rone_submit', true],
            ['set_two_rone_submit', true],

        ])->count() ?? 0;

        $averageDifficultyRating =  UserAnswerSheet::avg('difficulty_rating');


        return view('frontend.user_dashboard', compact(
            'set_one_r_one_d_r',
            'set_two_r_one_d_r',
            'totalUser',
            'averageDifficultyRating'
        ));
    }

    public function rocp($submit, $field)
    {
        $user   = User::where($submit, true)->count();
        return $score  = User::where($submit, true)->sum($field);
        return $result = ($score / $user) * 100;
    }
    public function set_one_r_d_r($set, $round, $submit)
    {

        return  $ratting = UserAnswerSheet::where('set_no', $set)->where('round', $round)->avg('difficulty_rating');
    }

    // search function
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = User::where('name', 'LIKE', '%' . $search . '%')->paginate(9);

        return view('frontend.search', compact('results'));
    }

    public function workShop()
    {
        $Workshop = Workshop::get();
        return view('frontend.workshop', compact('Workshop'));
    }

    public function introduction()
    {
        $Introduction = Introduction::get();
        return view('frontend.introduction', compact('Introduction'));
    }

    public function survey()
    {
        $surveys = Survey::paginate(15);
        return view('frontend.survey', compact('surveys'));
    }

    public function surveyAnswer(Request $request)
    {

        return  UserSurveyAnswer::updateOrCreate(
            ['user_id' => $request->userId, 'survey_id' => $request->question_id],
            [
                'ratting' => $request->ratting,
                'submitted_date' => Carbon::now()
            ]
        );
        return true;
    }

    public function setOne()
    {
        return view('frontend.question_set_one');
    }
    public function setTwo()
    {
        return view('frontend.question_set_two');
    }

    public static function answerSheet($id)
    {

        return UserAnswerSheet::query()->where('question_id', $id);
    }

    public function start_quiz_one_set(Request $request)
    {

        $data =  Question::where('status', true)->where('set_no', 1)->with('options')->take(20)->paginate(1);
        $countPageNumber =  Question::where('status', true)->where('set_no', 1)->with('options')->take(20)->paginate(1)->currentPage();
        $questionType = $data[0]->type;
        $type = '&type=one';
        $answer_rtwo = [];
        if (auth()->user()->set_rone_submit) {
            $type = '&type=two';
            $answer_rtwo =   self::answerSheet($data[0]->id)->where([
                ['round', 2], ['set_no', 1]
            ])->where('user_id', auth()->id())->first();
        }
        $previousPageUrl = null;
        if ($data->previousPageUrl()) {
            $previousPageUrl = route('start_quiz_one_set') . "?page=" . ($data->currentPage() - '1') . $type;
        }
        $nextPageUrl = $data->nextPageUrl();

        if ($countPageNumber >= 20 || $nextPageUrl == null) {
            $nextPageUrl  = route('start_quiz_one_set.list');
        } else {
            $nextPageUrl  = $data->nextPageUrl() . $type;
        }

        $answer_rone = self::answerSheet($data[0]->id)->where([
            ['round', 1], ['set_no', 1]
        ])->where('user_id', auth()->id())->first();
        $response =   self::answerSheet($data[0]->id)->get()->unique('user_id')->count() ?? 0;

        $correct_ans = round(($data[0]->correct_ans / ($response == 0 ? 1 : $response)) * 100) ?? 0;
        $average =   self::answerSheet($data[0]->id)->avg('difficulty_rating') ?? 0;
        $min =   self::answerSheet($data[0]->id)->min('difficulty_rating') ?? 0;
        $max =   self::answerSheet($data[0]->id)->max('difficulty_rating') ?? 0;

        return view('frontend.start_quiz_one_set', [
            'data'          => $data,
            'previousPageUrl' => $previousPageUrl,
            'nextPageUrl'   => $nextPageUrl,
            'answer_rone'   => $answer_rone,
            'answer_rtwo'   => $answer_rtwo,
            'type'          => $request->type,
            'response'      => $response,
            'correct_ans'   => $correct_ans,
            'average'       => $average,
            'min'           => $min,
            'questionType'  => $questionType,
            'max'           => $max,
        ]);
    }

    public function start_quiz_two_set(Request $request)
    {

        $data =  Question::where('status', true)->where('set_no', 2)->with('options')->take(20)->paginate(1);
        $countPageNumber =  Question::where('status', true)->where('set_no', 2)->with('options')->take(20)->paginate(1)->currentPage();
        $questionType = $data[0]->type;
        $type = '&type=one';
        $answer_rtwo = [];
        if (auth()->user()->set_two_rone_submit) {
            $type = '&type=two';
            $answer_rtwo =   self::answerSheet($data[0]->id)->where([
                ['round', 2], ['set_no', 2]
            ])->where('user_id', auth()->id())->first();
        }
        $previousPageUrl = null;
        if ($data->previousPageUrl()) {
            $previousPageUrl = route('start_quiz_two_set') . "?page=" . ($data->currentPage() - '1') . $type;
        }
        $nextPageUrl = $data->nextPageUrl();
        if ($countPageNumber >= 20 || $nextPageUrl == null) {
            $nextPageUrl  = route('start_quiz_two_set.list');
        } else {
            $nextPageUrl  = $data->nextPageUrl() . $type;
        }

        $answer_rone = self::answerSheet($data[0]->id)->where([
            ['round', 1], ['set_no', 2]
        ])->where('user_id', auth()->id())->first();

        $response =   self::answerSheet($data[0]->id)->get()->unique('user_id')->count() ?? 0;

        $correct_ans = round(($data[0]->correct_ans / ($response == 0 ? 1 : $response)) * 100) ?? 0;
        $average =   self::answerSheet($data[0]->id)->avg('difficulty_rating') ?? 0;
        $min =   self::answerSheet($data[0]->id)->min('difficulty_rating') ?? 0;
        $max =   self::answerSheet($data[0]->id)->max('difficulty_rating') ?? 0;

        return view('frontend.start_quiz_two_set', [
            'data'          => $data,
            'previousPageUrl' => $previousPageUrl,
            'nextPageUrl'   => $nextPageUrl,
            'answer_rone'   => $answer_rone,
            'answer_rtwo'   => $answer_rtwo,
            'type'          => $request->type,
            'response'      => $response,
            'correct_ans'   => $correct_ans,
            'average'       => $average,
            'min'           => $min,
            'questionType'  => $questionType,
            'max'           => $max,
        ]);
    }

    public function start_quiz_one_set_list()
    {
        $data =  Question::where('set_no', 1)->with('options')->take(20)->get();

        return view('frontend.start_quiz_one_set_list', ['data' => $data]);
    }

    public function start_quiz_two_set_rtwo_submit()
    {
        if (auth()->user()->set_two_rone_submit) {
            User::whereId(auth()->id())->update(['set_two_rtwo_submit' => true]);
            return redirect()->to('user/deshboard');
        }
        User::whereId(auth()->id())->update(['set_two_rone_submit' => true]);
        return redirect()->to('user/introduction');
    }

    public function start_quiz_two_set_list()
    {

        $data =  Question::where('status', true)->where('set_no', 2)->with('options')->take(20)->get();

        return view('frontend.start_quiz_two_set_list', ['data' => $data]);
    }

    public function start_quiz_one_set_rone_submit()
    {
        if (auth()->user()->set_rone_submit) {
            User::whereId(auth()->id())->update(['set_rtwo_submit' => true]);
            return redirect()->to('user/deshboard');
        }

        User::whereId(auth()->id())->update(['set_rone_submit' => true]);
        return redirect()->to('user/introduction');
    }

    public function answer(Request $request)
    {
        if ($request->ajax()) {
            try {
                // DB::beginTransaction();
                UserAnswerSheet::updateOrCreate(
                    [
                        'question_id'   => $request->question_id,
                        'user_id'       => auth()->id(),
                        'set_no'        => $request->set_no,
                        'round'         => $request->round == 'one' ? 1 : 2,
                    ],
                    [
                        'answer_key'            =>  json_encode($request->answer_key),
                        'difficulty_rating'     =>  $request->ratting,
                        'submitted_date'        =>  Carbon::now(),
                    ]
                );
                $question   =  Question::where([
                    ['id',  $request->question_id],
                    ['set_no',  $request->set_no],

                ])->first();
                $score = $this->score($request, $question);
                if ($score) {
                    return $this->CheckRatting($question, $request->round);
                }
                // DB::commit();
                return true;
            } catch (\Exception $ex) {
                // DB::rollBack();
                return $ex->getLine();
            }
        }
    }
    public function answer_2(Request $request)
    {

        if ($request->ajax()) {
            try {
                // DB::beginTransaction();
                UserAnswerSheet::updateOrCreate(
                    [
                        'question_id'   => $request->question_id,
                        'user_id'       => auth()->id(),
                        'set_no'        => $request->set_no,
                        'round'         => $request->round == 'one' ? 1 : 2,
                    ],
                    [
                        'answer_key'            =>  json_encode($request->answer_key),
                        'difficulty_rating'     =>  $request->ratting,
                        'submitted_date'        =>  Carbon::now(),
                    ]
                );
                $question   =  Question::where([
                    ['id',  $request->question_id],
                    ['set_no',  $request->set_no],

                ])->first();
                $score = $this->score($request, $question);

                if ($score) {
                    return $this->CheckRatting2($request->ratting, $question,  $request->round);
                }
                // DB::commit();
                return true;
            } catch (\Exception $ex) {
                // DB::rollBack();
                return $ex;
            }
        }
    }


    private function score($request, $question)
    {
        $score = true;
        $array = str_replace('[', '', $question->answer_key);
        $array = str_replace(']', '', $array);
        $array = str_replace('"', '', $array);
        $array =  explode(",", ($array));
        foreach ($request->answer_key as $key => $value) {
            $cr_or_nt = in_array($value, $array);
            if (!$cr_or_nt) {
                if ($score) {
                    $score = false;
                }
            };
        }
        return $score;
    }

    private function CheckRatting($question, $round)
    {
        if ($round == 'one') {
            User::whereId(auth()->id())->update(['score_so_one' => auth()->user()->score_so_one + 1]);
        } else {
            User::whereId(auth()->id())->update(['score_so_two' => auth()->user()->score_so_two + 1]);
        }
        $question->update(['correct_ans' => $question->correct_ans + 1]);
    }

    private function CheckRatting2($ratting, $question, $round)
    {
        if ($round == 'one') {
            User::whereId(auth()->id())->update(['score_st_one' => auth()->user()->score_st_one + 1]);
        } else {
            User::whereId(auth()->id())->update(['score_st_two' => auth()->user()->score_st_two + 1]);
        }
        $question->update(['correct_ans' => $question->correct_ans + 1]);
    }
}
