<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InforWebsite extends Model
{
    const POSITION_MAIN = 'position_main';

    public function getPositionOption(){
    	return array(
    		array('value' => self::POSITION_MAIN, 'title' => 'Position Main'),
    	);
    }
}
