<?php

namespace App;


Use Illuminate\Database\Eloquent\model;
Use Illuminate\Database\Eloquent\SoftDeletes;


class Users extends Model
{
    use SoftDeletes;

}