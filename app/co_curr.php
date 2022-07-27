<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class co_curr extends Model{

     protected $table="co_currs";
    protected $primaryKey="id";

    public $timestamps =false;

   
    protected $fillable=['id','stu_id','std','relay','art','chess','cricket','total','obtained_points'];

}

