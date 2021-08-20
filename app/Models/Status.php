<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    public function getClasses()
    {
        $classes = match ($this->name) {
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple text-white',
            'In Progress' => 'bg-yellow text-white',
            'Implemented' => 'bg-green text-white',
            'Closed' => 'bg-red text-white',
            default => 'bg-gray-200',
        };

        return $classes;
    }


    public static function getCount()
    {
        return Idea::query()
            ->selectRaw("count(*) as all_statuses")
            ->selectRaw("sum(`status_id` = 1) as open")
            ->selectRaw("sum(`status_id` = 2) as considering")
            ->selectRaw("sum(`status_id` = 3) as in_progress")
            ->selectRaw("sum(`status_id` = 4) as implemented")
            ->selectRaw("sum(`status_id` = 5) as closed")
            ->first()
            ->toArray();
    }
}
