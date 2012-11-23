<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Fields base class. All fieldses should extend this class.
 *
 * @package    Kohana
 * @category   Fields
 * @author     Konstantin Ovcharenko
 * @copyright  (c) 2012 Konstantin Ovcharenko
 * @license    http://kohanaframework.org/license
 */
abstract class Fields {

	/**
	 * Create a new fields instance.
	 *
	 *     $fields = Fields::factory($name);
	 *
	 * @param   string  $name  fields group name
	 * @return  Fields
	 */
	public static function factory($name)
	{
		// Add the fields prefix
		$class = 'Fields_'.$name;

		return new $class;
	}

} // End Model

