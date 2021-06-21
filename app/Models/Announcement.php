<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "announcements";
    protected $attributes =['ann_link'=>'tbd', 'ann_image'=>'https://scontent.fkul4-3.fna.fbcdn.net/v/t1.6435-9/152714350_2623156371312110_6590327975592329482_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=973b4a&_nc_ohc=fC34uplLHBUAX9Uv4zR&_nc_ht=scontent.fkul4-3.fna&oh=3ad9ba47fd688d5dc20001e62d650fc7&oe=60D4D00A'];
    protected $fillable = ['ann_name', 'ann_desc', 'ann_id','ann_date','ann_time'];
}
