<?php 

namespace Jonovanvonghes\Packages;

/**
 * Class JvSession
 * Toutes les fonctions concernant la manipulation de session
 *
 * Jonovan Vonghes
 */
class JvSession {

    protected $key, $name, $cookie;


    const JVSESSION_STARTED = TRUE;
    const JVSESSION_NOT_STARTED = FALSE;

    protected $sessionState = self::JVSESSION_NOT_STARTED;

    public function __construct($name_session = ''){ 

		$session_id = session_id();

		if(empty($session_id)) {

			ini_set("session.cookie_lifetime", 0);
			if (!empty($name_session))
				session_name($name_session);
			session_start() or die('Impossible de lancer la session : function __construct() dans /JvSession.php');

		}

		$this->sessionState = self::JVSESSION_STARTED;
    }

    public function get_id_session(){

    	return session_id();
	}

    public function read($id){
    	if(isset($_SESSION[$id]))
    		return $_SESSION[$id];
    	return FALSE;
	}

	public function exist($id){
		if(isset($_SESSION[$id]))
			return TRUE;
		return FALSE;
	}

	public function write($id, $data){
		$_SESSION[$id] = $data;
	}

	public function remove($id){
		if (isset($_SESSION[$id]))
			unset($_SESSION[$id]);
		return 'none';
	}

	public function destroy(){
        if ( $this->sessionState == self::JVSESSION_STARTED ){
            unset( $_SESSION );

            if (ini_get("session.use_cookies")) {
			    $params = session_get_cookie_params();
			    setcookie(session_name(), '', time() - 42000,
			        $params["path"], $params["domain"],
			        $params["secure"], $params["httponly"]
			    );
			}
            $this->sessionState = !session_destroy();
            
            return !$this->sessionState;
        }
        
        return FALSE;
    }
}


// $JvSession = new JvSession('DSI_APPLI_SESSION');
// $JvSession->write('id_session', session_id());
// // $JvSession->destroy();