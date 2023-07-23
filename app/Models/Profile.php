<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    const TABLE = 'profiles';

    protected $table = self::TABLE;

    protected $fillable = [
        'bio',
        'facebook',
        'instagram',
        'linkedin',
    ];

    public function bio(): string{
        return $this->bio;
    }

    public function facebook(): string{
        return $this->facebook;
    }
    public function instagram(): string{
        return $this->instagram;
    }
    public function linkedin(): string{
        return $this->linkedin;
    }


    public function user(): BelongsTo{
        return $this -> belongsTo(User::class, 'user_id');
    }
}
