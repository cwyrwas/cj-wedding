<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Guest extends Model
{
    use HasFactory;

    protected $guarded = [];

    /** 
     * Pass in an the filters and return the guests.
     * @param  array $filters
     * @return Guest
     * 
     * The when() method accepts a callback which is used to build the query. Essentially saying:
     * When the search filter is set, query the guests table and find a matching record based on the name or email.
     */
    public function scopeFilter($query, array $filters) 
    {   
        $query
            ->when($filters['search'] ?? false, fn ($query, $search) =>
                $query->where(fn($query) =>
                    $query
                        ->where('name', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%')        
                )
            );
    }

    public static function single($id)
    {
        return Guest::find($id);
    }

    public function gift()
    {
        return $this->hasOne(Gift::class);
    }
}
