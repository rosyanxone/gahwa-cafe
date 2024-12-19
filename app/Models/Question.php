<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $guarded = [];

    public function answer(): HasMany
    {
        return $this->hasMany(Answer::class);
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
