<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Respondent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $totalRespondent = Respondent::all()->count();
        $randomEssayAnswers = Answer::whereHas('question', function ($q) {
            $q->where('type', 'essay');
        })->inRandomOrder()
        ->limit(2)
        ->get();

        return view('home', [
            'totalRespondent' => $totalRespondent,
            'randomEssayAnswers' => $randomEssayAnswers,
        ]);
    }
}
