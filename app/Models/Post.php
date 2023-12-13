<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["content", "image", "user_id"];

    //associate méthode post to user
    // $account = Account::find(10);
 
// $user->account()->associate($account);
 
// $user->save();
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
