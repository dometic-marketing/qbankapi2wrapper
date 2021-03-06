<?php

namespace Kaigan\QBank2\API\Model;

use \Kaigan\QBank2\API\Exception\PropertyException;

/**
 * Specifies accessor method for objects that has {@link Property}(ies).
 * @author Björn Hjortsten
 * @copyright Kaigan 2010
 * @see Property
 */
interface IHasProperties {

	/**
	 * Gets all the properties.
	 * @author Björn Hjortsten
	 * @return array An array of {@link Property}(ies).
	 * @package QBankAPIWrapper
	 */
	public function getProperties();

	/**
	 * Gets a {@link Property}.
	 * @param mixed $identifier Either the system name of the property or the propertys id.
	 * @throws PropertyException Thrown if there is no property with the specified identifier.
	 * @author Björn Hjortsten
	 * @return Property
	 */
	public function getProperty($identifier);
}