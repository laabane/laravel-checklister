<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChecklistGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get all of the checklists for the ChecklistGroup
     */
    public function checklists()
    {
        return $this->hasMany(Checklist::class);
    }
}
