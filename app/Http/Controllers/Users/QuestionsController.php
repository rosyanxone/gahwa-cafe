<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::orderBy('order')->get();

        return view('pages.admin.question.index', [
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $questions = Question::orderBy('order')->get();

        return view('pages.admin.question.create', [
            'questions' => $questions,
            'questionsTotal' => ($questions->count() == 0) ? 1 : $questions->count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for ($i = 0; $i < $request->questionsTotal; $i++) {
            $question = Question::where('order', $i + 1)->first();

            if ($question) {
                $question->update([
                    'title' => $request->questions[$i] ?? '',
                    'order' => $i + 1,
                    'type' => $request->types[$i],
                ]);
            } else {
                Question::create([
                    'title' => $request->questions[$i] ?? '',
                    'order' => $i + 1,
                    'type' => $request->types[$i],
                ]);
            }
        }

        return redirect()->route('question.create');
    }

    public function reorder(Question $question)
    {
        if (request()->get('move') == 'up') {
            $wantedOrder = $question->order - 1;
        } else {
            $wantedOrder = $question->order + 1;
        }

        $reorderedQuestion = Question::where('order', $wantedOrder)->first();

        if ($reorderedQuestion) {
            $reorderedQuestion->update([
                'order' => $question->order,
            ]);
        } else {
            return redirect()->route('question.create');
        }

        $question->update([
            'order' => $wantedOrder,
        ]);

        return redirect()->route('question.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        $questions = Question::orderBy('order')->get();

        foreach ($questions as $i => $question) {
            $question->update([
                'order' => $i + 1,
            ]);
        }

        return redirect()->route('question.index');
    }
}
