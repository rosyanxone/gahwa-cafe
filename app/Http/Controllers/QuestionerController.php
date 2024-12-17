<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Respondent;
use Illuminate\Http\Request;

class QuestionerController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('order')->get();

        return view('pages.guest.questioner', [
            'questions' => $questions,
        ]);
    }

    public function store(Request $request)
    {
        $respondent = Respondent::create([
            'age' => $request->age,
            'gender' => $request->gender,
            'cafe' => $request->cafe,
            'visited_at' => $request->visited_at,
        ]);

        $questions = Question::orderBy('order')->get();

        foreach ($questions as $i => $question) {
            Answer::create([
                'respondent_id' => $respondent->id,
                'question_id' => $question->id,
                'body' => $request->get('answer-' . $i + 1),
            ]);
        }

        return redirect()->route('home');
    }
}
