<?php
/**
* PHP Social Networking
* @author Atit More 
* Registry Class
*/
class Registry {
/**
* Array of objects
*/
private $objects;
/**
* Array of settings
*/
private $settings;
public function __construct() {
}
	/**
	* Create a new object and store it in the registry
	* @param String $object files prefix 
	* @param String $key pair for the object
	* @return void
	* Now to Create the two methods of these object one to store data or object and another to retrive data or object.  We will be using factory method. 
	*/
	public function createAndStoreObject( $object, $key )
{
require_once( $object . '.class.php' );
		$this->objects[ $key ] = new $object( $this );
}
	/**
	* when sorting setting we need to take data and store directingin the array.
	* store setting
	* @param String $setting the setting data
	* @param String $key pair for the setting array
	* @return void
	*/
	public function storeSetting( $setting, $key )
{
$this->settings[ $key ] = $setting;
}
	/**
	*Retrive data or object from registry ,( getsetting, getObject )
	* Get a setting from registries store
	* @param String $key the objects array key 
	* @return Object
	*/
     public function getSetting( $key )
{
return $this->settings[ $key ];
}
    public function getObject( $key )
{
return $this->objects[ $key ];
}
}
?>
  
     
