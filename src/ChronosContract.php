<?php

namespace MasterRO\Chronos;

use Cake\Chronos\ChronosInterface;

interface ChronosContract extends ChronosInterface
{
	/**
	 * Checks if macro is registered.
	 *
	 * @param  string $name
	 *
	 * @return bool
	 */
	public static function hasMacro($name);
}