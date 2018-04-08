<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Data extends Eloquent
{
    //protected $collection = 'data_collection';
    protected $connection = 'mongodb';

    protected $guarded = [];
}
