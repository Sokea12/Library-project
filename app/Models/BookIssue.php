<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'student_id',
        'book_id',
        'issue_date',
        'return_date',
        'issue_status',
        'return_day',
    ];

    /**
     * Get the student that owns the book_issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(student::class, 'student_id', 'id');
    }

    /**
     * Get the book that owns the book_issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(book::class, 'book_id', 'id');
    }


    protected $casts = [
        'issue_date' => 'datetime:Y-m-d',
        'return_date' => 'datetime:Y-m-d',
        'return_day' => 'datetime:Y-m-d',
    ];
}
