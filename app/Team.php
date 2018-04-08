<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'teamname', 'faculty', 'teamleader_id', 'team1_id', 'team2_id', 'hasLaptop', 'programingLanguages','enviroment','linkToCloud',
    ];


}
