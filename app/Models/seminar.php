<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;
    protected $table = 'seminars';
    protected $fillable = [
     'title', 'location', 'venue', 'date', 'price','status'
    ];
    public function perticaptes(){
        return $this->hasMany(buycourse::class,'course_id','id');
    }

    public function trainers(){
        return $this->hasMany(SeminarTrainer::class,'seminer_id','id');
    }
    public function chat(){
        return chat::where('model',seminar::class)->where('model_id',$this->id)->first();
    }
}
