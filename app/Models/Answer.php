<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    /** @use HasFactory<\Database\Factories\AnswerFactory> */
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['multipled_skor'];

    public function getMultipledSkorAttribute()
    {
        return intval($this->body) ? $this->body * 20 : null; // dapatkan nilai skor dan kalikan dengan 20
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function respondent(): BelongsTo
    {
        return $this->belongsTo(Respondent::class);
    }
}
