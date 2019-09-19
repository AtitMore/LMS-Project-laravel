<?php

/**
* Get relationships by user
* @param int $user the user whose relationships we wish to list
* @param boolean $obr should we randomly order the results?
* @param int $limit should we limit the results? ( 0 means no, > 0 means limit to $limit )
* @return int the query cache ID
*/
class relationships
{
public function getByUser( $user, $obr=false, $limit=0 )
{
// the standard get by user query
$sql = "SELECT t.plural_name, p.name as users_name, u.ID FROM users u, profile p, relationships r, relationship_types t WHERE t.ID=r.
type AND r.accepted=1 AND (r.usera={$user} OR r.userb={$user}) AND IF( r.usera={$user},u.ID=r.userb,u.ID=r.usera) AND p.user_id=u.ID";
// if we are ordering by random
if( $obr == true )
{
$sql .= " ORDER BY RAND() ";
}
// if we are limiting
if( $limit != 0 )
{
$sql .= " LIMIT " . $limit;
}
// cache and return
$cache = $this->registry->getObject('db')->cacheQuery( $sql );
return $cache;
}
}
?>