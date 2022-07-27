<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class subject extends Model{

     protected $table="subjects";
    
protected $primaryKey="sub_id";
    public $timestamps =false;

   
    protected $fillable=['sub_id','stu_id','std','eng','hin','mar','ss','total','obtained'];

}

