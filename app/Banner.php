<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	const POSITION_TOP = 'postion_top';
	const POSITION_BOTTOM = 'position_bottom';

	const STATUS_DISABLE = 0;
	const STATUS_ENABLE = 1;

    protected function getPossitionOption()
    {
    	return array(
    		array('value' => self::POSITION_TOP, 'title' => 'Position Top'),
    		array('value' => self::POSITION_BOTTOM, 'title' => 'Position Bottom'),
    	);
    }
}
