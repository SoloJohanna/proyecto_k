<?php

namespace App\Models;

use DateTimeZone;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'mensaje',
        'ip',
        'user_agent',
        'referer'
    ];

    public function scopeFilter($query, $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('nombre', 'like', '%' . $filters['search'] . '%')
                ->orWhere('correo', 'like', '%' . $filters['search'] . '%')
                ->orWhere('telefono', 'like', '%' . $filters['search'] . '%');
        }
    }
    public function scopeSort($query, $sort)
    {
        if ($sort) {
            $query->orderBy($sort['field'], $sort['direction']);
        } else {
            $query->orderBy('created_at', 'desc');
        }
    }
    public function scopePaginate($query, $perPage)
    {
        return $query->paginate($perPage);
    }
}
