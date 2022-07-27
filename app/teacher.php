<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class teacher extends Model{

     protected $table="teachers";
    

    public $timestamps =false;

   
    protected $fillable=['id','u_name','email','password'];

}

