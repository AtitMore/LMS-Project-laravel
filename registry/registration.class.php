<?php
/**
* Standard registration fields
*/
class register {


private $fields = array( 'user' => 'username', 'password' => 'password', 'password_confirm' => 'password Confirmation', 'email' => 'email address' );

/**
* Any errorin the registration
*/
private $registrationErrors = array();

/**
*Array of error label classes - allows us to make a fields a different color, to indiacate there were errors
*/
private $registrationErrorLabels = array();

/**
* The values user have submitted when registering
*/
private $submittedValues = array();

/** 
* The santized versions of the values the user has submitted - these are database ready
*/
private $sanitizedValues = array();

/**
* Should our users automatically be "active" or should then require email verification?
*/
private $activeValue = 1;
private function checkRegistration()
{
	$allClear = true;

	// bank fields
	foreach( $this->fields as $field => $name )
{
if( ! isset( $_POST[ 'register_' . $field ] ) ||
$_POST[ 'register_' . $field ] == '' )
{
			$allClear = false;
$this->registrationErrors[] = 'You must enter a ' . $name;
$this->registrationErrorLabels['register_' . $field . '_
label'] = 'error';
}
}
	// password match 
	if( $_POST[ 'register_password' ]!= $_POST[ 'register_password_
confirm' ] )
{
$allClear = false;
$this->registrationErrors[] = 'You must confirm your password';
$this->registrationErrorLabels['register_password_label'] = 'error';
$this->registrationErrorLabels['register_password_confirm_label'] = 'error';
}

	// password length
	if( strlen( $_POST['register_password'] ) < 6 )
{

$allClear = false;
$this->registrationErrors[] = 'Your password is too short, it must be at least 6 characters';
$this->registrationErrorLabels['register_password_label'] = 'error';
$this->registrationErrorLabels['register_password_confirm_label'] = 'error';
}

	//email header 
	if( strpos( ( urldecode( $_POST[ 'register_email' ] ) ), "\r" ) === true || strpos( ( urldecode( $_POST[ 'register_email' ] ) ), "\n" ) === true )
{
$allClear = false;
$this->registrationErrors[] = 'Your email address is not valid (security)';
$this->registrationErrorLabels['register_email_label'] = 'error';
}

	//emali valid

if( ! preg_match( "^[_a-z0-9-]+(\.[_a-z0-9]+)*@[_a-z0-9-]+(\.[a-z0-9]+)*(\.[a-z]{2,4})^", $_POST[ 'register_email'] ) )
{
	$allClear = false;
	$this->registrationErrors[] = 'You Must Enter A Valid Email address';
	$this->registrationErrorLabels['register_email_label'] = 'error';
}
	// terms accepted
	if (! isset( $_POST['register_terms'] ) || $_POST['register_terms'] != 1 )
	{
		$allClear = false;
		$this->registrationErrors[] = 'You Must Accept Our Terms And Condition.';
		$this->registerErrorLabels['register_terms_label'] = 'error';
	}

	// duplicate user+email check
$u = $this->registry->getObject('db')->sanitizeData( $_POST['register_user'] );
$e = $this->registry->getObject('db')->sanitizeData( $_POST['register_email'] );
$sql = "SELECT * FROM users WHERE username='{$u}' OR email='{$e}'";
$this->registry->getObject('db')->executeQuery( $sql );
if( $this->registry->getObject('db')->numRows() == 2 )
{
$allClear = false;

// both
$this->registrationErrors[] = 'Both your username and email address are already in use on this site.';
$this->registrationErrorLabels['register_user_label'] = 'error';
$this->registrationErrorLabels['register_email_label'] = 'error';
}
elseif( $this->registry->getObject('db')->numRows() == 1 )
{

// possibly both, or just one
$u = $this->registry->getObject('db')->sanitizeData( $_POST['register_user'] );
$e = $this->registry->getObject('db')->sanitizeData( $_POST['register_email'] );
$data = $this->registry->getObject('db')->getRows();
if( $data['username'] == $u && $data['email'] == $e )
{

	$allClear = false;
$this->registrationErrors[] = 'Both your username and password are already in use on this site.';
$this->registrationErrorLabels['register_user_label'] = 'error';
$this->registrationErrorLabels['register_email_label'] = 'error';

// both
}
elseif( $data['username'] == $u )
{
$allClear = false;
// username
$this->registrationErrors[] = 'Your username is already in use on this site.';
$this->registrationErrorLabels['register_user_label'] = 'error';
}
else
{
$allClear = false;

// email address	
$this->registrationErrors[] = 'Your email address is already in use on this site.';
$this->registrationErrorLabels['register_email_label'] = 'error';
}
}

//captcha
if( $this->registry->getsetting('captcha.enabled')==1 )
{
	//captcha check
}

//hook 
if ( $this->registrationExtention->checkRegistrationSubmission() == false ) 
{
	$allClear =  false;
}

if( $allClear == true )
{
$this->sanitizedValues['username'] = $u;
$this->sanitizedValues['email'] = $e;
$this->sanitizedValues['password_hash'] = md5( $_POST['register_password'] );
$this->sanitizedValues['active'] = $this->activeValue;
$this->sanitizedValues['admin'] = 0;
$this->sanitizedValues['banned'] = 0;
$this->submittedValues['register_user'] = $_POST['register_user'];
$this->submittedValues['register_password'] = $_POST['register_password'];
return true;
}
else
{
$this->submittedValues['register_user'] = $_POST['register_user'];
$this->submittedValues['register_email'] = $_POST['register_email'];
$this->submittedValues['register_password'] = $_POST['register_password'] ;
$this->submittedValues['register_password_confirm'] = $_POST['register_password_confirm'] ;
$this->submittedValues['register_captcha'] = ( isset( $_POST['register_captcha'] ) ?
$_POST['register_captcha'] : '' );
return false;
}

}
private $registry;
private $extraFields = array();
private $errors = array();
private $submittedValues = array();
private $sanitizedValues = array();
private $errorLabels = array();

public function __construct( $registry )
{
	$this->registry = $registry;
	$this->extraFields['gender'] = array('friendlyname' => 'User Gender', 'table' => 'profile', 'field' => 'gender', 'type' => 'list', 'required' => false, 'options' => array('male', 'female') );
	$this->extraFields['dob'] = array('friendlyname' => 'User Date Of Birth', 'table' => 'profile', 'field' => 'dob', 'type' =>'DOB', 'required' => false);
}
public function checkRegistrationSubmission()
{
	$valid = true;

	foreach( $this->extraFields as $field => $data )
	{
		
		if( ( ! isset( $_POST['register_' . $field] ) ||
		$_POST['register_' . $field] == '' )
		&& $data['required'] = true )
		{
		$this->submittedValues[ $field ] = $_POST['register_' . $field];
		$this->errorLabels['register_' . $field .'_label'] = 'error'; 
		$this->errors[] = 'Field ' . $data['friendlyname'] . ' cannot be blank';
		$valid = false;
		}

		elseif( $_POST['register_' . $field] == '' )
		{
		$this->submittedValues[ 'register_' . $field ] = '';
		}
		else
		{

				if( $data['type'] == 'text' )
				{
				$this->sanitizedValues[ 'register_' . $field ] = $this->registry->getObject('db')->sanitizeData( $_POST['register_' . $field] );
				$this->submittedValues['register_' . $field] = $_POST['register_' . $field];
				}
				elseif( $data['type'] == 'int' )
				{
				$this->sanitizedValues[ 'register_' . $field ] = intval( $_POST['register_' . $field] );
				$this->submittedValues['register_' . $field] = $_POST['register_' . $field];
				}
				elseif( $data['type'] == 'list' )
				{
						if( ! in_array( $_POST['register_' . $field], $data['options'] ) )
				{
					$this->submittedValues[ $field ] = $_POST['register_' . $field];
					$this->errorLabels['register_' . $field .'_label'] = 'error';
					$this->errors[] = 'Field ' . $data['friendlyname'] . ' was not valid';
					$valid = false;
					}
					else
					{
					$this->sanitizedValues[ 'register_' . $field ] = intval( $_POST['register_' . $field] );
					$this->submittedValues['register_' . $field] = $_POST['register_' . $field];

				}
			}
					else
				 	{
				 		$method = 'validate_' . $data['type'];
						if( $this->$method( $_POST['register_' . $field] ) == true )
						{
						$this->sanitizedValues[ 'register_' . $field ] = $this->registry->getObject('db')->sanitizeData( $_POST['register_' . $field] );
						$this->submittedValues['register_' . $field] = $_POST['register_' . $field];
					}
					else
					{
						$this->sanitizedValues[ 'register_' . $field ] =
						$this->registry->getObject('db')->sanitizeData( $_POST['register_' . $field] );
						$this->submittedValues['register_' . $field] = $_POST['register_' . $field];
						$this->errors[] = 'Field ' . $data['friendlyname'] . ' was not valid';
						$valid = false;
					}
				}
			}
	}
						if( $valid == true )			
						{	
						return true;
						}
						else
						{
						return false;
						}	
					}

/**
* Create our user profile
* @param int $uid the user ID
* @return bool
*/
				public function processRegistration( $uid )
				{
				$tables = array();
				$tableData = array();
				// group our profile fields by table, so we only need to do one insert per table
				foreach( $this->extraFields as $field => $data )
					{
				if( ! ( in_array( $data['table'], $tables ) ) )
			{
					$tables[] = $data['table'];
					$tableData[ $data['table'] ] = array( 'user_id' => $uid, $data['field'] => $this->sanitizedValues[ 'register_' . $field ]);
			}
				else
		{
				$tableData[ $data['table'] ] = array( 'user_id' => $uid,
				$data['field'] => $this->sanitizedValues[ 'register_' . $field ]);
		}
	}
			foreach( $tableData as $table => $data )
{
			$this->registry->getObject('db')->insertRecords( $table, $data );
}
return true;
}

/**
* Create our user profile
* @param int $uid the user ID
* @return bool
*/
		public function processRegistration( $uid )
	{
		$tables = array();
		$tableData = array();

		}

		// group our profile fields by table, so we only need to do one insert per table
		foreach( $this->extraFields as $field => $data )
		{
		if( ! ( in_array( $data['table'], $tables ) ) )
		{
			$tables[] = $data['table'];
			$tableData[ $data['table'] ] = array( 'user_id' => $uid,
			$data['field'] => $this->sanitizedValues[ 'register_' . $field ]);
		}
			else
		{
			$tableData[ $data['table'] ] = array( 'user_id' => $uid, $data['field'] => $this->sanitizedValues[ 'register_' . $field ]);
		}
	}
			foreach( $tableData as $table => $data )
		{
			$this->registry->getObject('db')->insertRecords( $table, $data );
		}
			return true;
		}
		$this->registry = $registry;

		require_once FRAMEWORK_PATH . 'controllers/authenticate/registrationcontrollerextention.php';
		$this->registrationExtention = new
			Registrationcontrollerextention( $this->registry );

			if( isset( $_POST['process_registration']))
				{
					if ( $this->checkRegistration()) == true ) 
					{
						$userId = $this->processRegistration();
						if( $this->activeValue == 1 )
						{
							$this->registry->getObject('authenticate')->forceLogin( $this->submittedValues['register_user'], md5( $this->submittedValues['register_password'] ) );
						}
							$this->uiRegistrationProcessed();
						}
							else
						{
							$this->uiRegister( true );
						} 
					}
					else
						$this->uiRegister( false );
				}
			}	
?>