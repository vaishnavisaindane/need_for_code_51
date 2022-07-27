<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class student extends Model{

     protected $table="students";
    
protected $primaryKey="stu_id";
    public $timestamps =false;

   
    protected $fillable=['stu_id','name','std','roll','login_pass','email','month','year','present','working'];

}

