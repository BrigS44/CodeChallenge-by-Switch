<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = [
        'teamname', 'faculty', 'teamleader_id', 'team1_id', 'team2_id', 'hasLaptop', 'programingLanguages','enviroment','linkToCloud',
    ];

    public function teamleader()
    {
        return $this->belongsTo('App\User','teamleader_id');
    }
    public function team1()
    {
        return $this->belongsTo('App\User','team1_id');
    }

    public function team2()
    {
        return $this->belongsTo('App\User','team2_id');
    }




}
