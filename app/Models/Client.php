<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'ip',
        'user_agent',
        'referer'
    ];

    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function getEmailAttribute($value)
    {
        return strtolower($value);
    }
    public function getPhoneAttribute($value)
    {
        return preg_replace('/[^0-9]/', '', $value);
    }
    public function getMessageAttribute($value)
    {
        return htmlspecialchars($value);
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace('/[^0-9]/', '', $value);
    }
    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = htmlspecialchars($value);
    }
    public function scopeFilter($query, $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('email', 'like', '%' . $filters['search'] . '%')
                ->orWhere('phone', 'like', '%' . $filters['search'] . '%')
                ->orWhere('message', 'like', '%' . $filters['search'] . '%');
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
