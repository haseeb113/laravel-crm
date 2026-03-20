<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'birthday', 'notes'
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

    public function hasBirthdayToday(): bool
    {
        return $this->birthday->format('m-d') === now()->format('m-d');
    }
}