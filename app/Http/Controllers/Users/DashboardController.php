<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Respondent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalRespondent = Respondent::all()->count();

        $questions = Question::where('type', 'likert')
            ->orderBy('order')
            ->get()
            ->mapWithKeys(function ($q, $index) {
                return [$q->order => 'Q' . ($index + 1)];
            });

        $questionsAvg = Answer::whereHas('question', function ($q) {
            return $q->where('type', 'likert');
        })
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->select(
                'answers.question_id',
                DB::raw('ROUND(AVG(answers.body), 1) as average_score'),
                'questions.order'
            )
            ->groupBy('answers.question_id')
            ->orderBy('questions.order')
            ->get()
            ->toArray();

        $questionCollections = Question::orderBy('order')->where('type', 'likert')->get();

        return view('pages.admin.dashboard', [
            'totalRespondent' => $totalRespondent,
            'questions' => $questions,
            'questionsAvg' => $questionsAvg,
            'questionCollections' => $questionCollections,
        ]);
    }
}
