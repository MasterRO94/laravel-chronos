<?php

namespace MasterRO\Chronos;

use DateTimeInterface;

trait ReplaceCarbonWithChronos
{
	/**
	 * @param $value
	 *
	 * @return ChronosContract|Chronos|static
	 */
	protected function asDateTime($value)
	{
		// If this value is already a Chronos instance, we shall just return it as is.
		// This prevents us having to re-instantiate a Chronos instance when we know
		// it already is one, which wouldn't be fulfilled by the DateTime check.
		if ($value instanceof Chronos) {
			return $value;
		}

		// If the value is already a DateTime instance, we will just skip the rest of
		// these checks since they will be a waste of time, and hinder performance
		// when checking the field. We will just return the DateTime right away.
		if ($value instanceof DateTimeInterface) {
			return new Chronos(
				$value->format('Y-m-d H:i:s.u'), $value->getTimezone()
			);
		}

		// If this value is an integer, we will assume it is a UNIX timestamp's value
		// and format a Chronos object from this timestamp. This allows flexibility
		// when defining your date fields as they might be UNIX timestamps here.
		if (is_numeric($value)) {
			return Chronos::createFromTimestamp($value);
		}

		// If the value is in simply year, month, day format, we will instantiate the
		// Chronos instances from that format. Again, this provides for simple date
		// fields on the database, while still supporting Chronos conversion.
		if ($this->isStandardDateFormat($value)) {
			return Chronos::createFromFormat('Y-m-d', $value)->startOfDay();
		}

		// Finally, we will just assume this date is in the format used by default on
		// the database connection and use that format to create the Chronos object
		// that is returned back out to the developers after we convert it here.
		return Chronos::createFromFormat(
			$this->getDateFormat(), $value
		);
	}
}