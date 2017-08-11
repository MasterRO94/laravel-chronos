<?php

namespace MasterRO\Chronos;

use Illuminate\Support\Traits\Macroable;
use \Cake\Chronos\Chronos as CakeChronos;

class Chronos extends CakeChronos implements ChronosContract
{
	use Macroable;
}