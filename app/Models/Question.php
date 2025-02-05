<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $guarded = [];
    protected $appends = ['average_bobot'];

    public function answer(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    // No. 1, 2, 3
    public function getAverageBobotAttribute()
    {
        // jumlah unsur pertanyaan dibagi jumlah responden. untuk mendapatkan rata2 unsur.
        $avgUnsur = intval($this->answer()->sum('body')) ? $this->answer()->sum('body') / Respondent::all()->count() : null;
        // 1 dibagi jumlah pertanyaan. untuk mendapatkan rata2 tertimbang.
        $avgTertimbang = floatval(number_format(1 / Question::where('type', 'likert')->count(), 2));

        // rata2 unsur dikali nilai tertimbang. untuk mendapatkan bobot.
        return number_format($avgUnsur * $avgTertimbang, 2);
    }

    public function scopeGroupedAnswer($query, $questionId)
    {
        return $query->where('id', $questionId)
            ->with('answer')
            ->get()
            ->map(function ($question) {
                return [
                    'question' => $question->title,
                    'scores' => $question->answer
                        ->groupBy('body')
                        ->map(function ($group) {
                            return $group->count();
                        })
                        ->toArray()
                ];
            });
    }
}
