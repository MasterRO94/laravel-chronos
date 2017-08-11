<?php

namespace MasterRO\Chronos;

use Cake\Chronos\ChronosInterface;

interface ChronosContract extends ChronosInterface
{
	/**
	 * Register a custom macro.
	 *
	 * @param  string $name
	 * @param  callable $macro
	 *
	 * @return void
	 */
	public static function macro($name, callable $macro);


	/**
	 * Checks if macro is registered.
	 *
	 * @param  string $name
	 *
	 * @return bool
	 */
	public static function hasMacro($name);
}