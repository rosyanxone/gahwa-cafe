<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    /** @use HasFactory<\Database\Factories\RespondentFactory> */
    use HasFactory;

    protected $guarded = [];
    // protected $appends = ['respondent_value'];

    // public function getRespondentValueAttribute()
    // {
    //     // jumlahkan hasil dari perkalian skor dan bagi dengan total pertanyaan likert
    //     return $this->answer->sum('multipled_skor') / Question::where('type', 'likert')->count();
    // }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
