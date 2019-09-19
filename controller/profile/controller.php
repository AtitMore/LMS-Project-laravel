<?php
/**
* Set common template tags for all profile aspects
* @param int $user the user id
* @return void
*/
private function commonTemplateTags( $user )
{
// get a random sample of 6 friends.
require_once( FRAMEWORK_PATH . 'models/relationships.php' );
$relationships = new Relationships( $this->registry );
$cache = $relationships->getByUser( $user, true, 6 );
$this->registry->getObject('template')->getPage()->addTag(
'profile_friends_sample', array( 'SQL', $cache ) );
// get the name and photo of the user
require_once( FRAMEWORK_PATH . 'models/profile.php' );
$profile = new Profile( $this->registry, $user );
$name = $profile->getName();
$uid = $profile->getID();
$photo = $profile->getPhoto();
$this->registry->getObject('template')->getPage()->addTag( 'profile_name', $name );
$this->registry->getObject('template')->getPage()->addTag( 'profile_photo', $photo );
$this->registry->getObject('template')->getPage()->addTag( 'profile_user_id', $uid );
// clear the profile
$profile = "";
}
?>