<?php

namespace App\Models;

use App\Casts\Titlecast;
use App\Traits\HasAuthor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use HasAuthor;


    const TABLE ='posts';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'coverimage',
        'published-at',
        'type',
        'photo-credit-text',
        'photo-credit-links',
        'author_id',
    ];

    protected $with = [
        'authorRelation',
    ];

    protected $casts = [
        'published-at' => 'datetime',
        'title' => Titlecast::class,
    ];


    public function id() : int {

        return $this -> id;
    }
    public function title() : string {

        return $this -> title;
    }  
    public function body() : string {

        return $this -> body;
    }

    public function excerpt(int $limit = 50) : string {

        return Str::limit(strip_tags($this->body()), $limit);
    }

    public function coverimage(): string{
        return $this -> coverimage;
    }


}
