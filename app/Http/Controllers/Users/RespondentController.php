<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Respondent;
use Illuminate\Http\Request;

class RespondentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::where('type', 'essay')
            ->orderBy('order')
            ->with('answer')
            ->get();

        $sumRespondentValue = Respondent::all()->sum('respondent_value'); // jumlahkan hasil dari keseluruhan nilai jawaban responden
        $totalRespondent = Respondent::all()->count(); // dapatkan jumlah responden
        $finalScore = $sumRespondentValue / $totalRespondent; // dapatkan nilai akhir dari hasil bagi variable di atas

        $maleRespondent = Respondent::where('gender', 'L')->count();
        $femaleRespondent = Respondent::where('gender', 'P')->count();

        return view('pages.admin.respondent.index', [
            'questions' => $questions,
            'finalScore' => $finalScore,
            'totalRespondent' => $totalRespondent,
            'maleRespondent' => $maleRespondent,
            'femaleRespondent' => $femaleRespondent,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Respondent $respondent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respondent $respondent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Respondent $respondent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respondent $respondent)
    {
        //
    }
}
