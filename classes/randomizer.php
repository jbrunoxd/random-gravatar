<?php
	include('GravatarRPC.class.php');
	include('avatars.php');
	include('secrets.php');
	
	class Randomizer {
		public function randomizeGravatar() {				
			$max = count($avatars);
			$gravatarURL = $avatars[random_int(0,$max)]	
			foreach (GRAVATAR_EMAILS as $email) {
				$gravatarAPI = new GravatarRPC(AKISMET_API_KEY, $email);
				foreach ($this->convertToArray($gravatarAPI->userimages()) as $gravatar) {
					// WARNING: this deletes every Gravatar on your account!
					$gravatarAPI->deleteUserimage(str_replace('.jpg', '', end(explode('/', $gravatar['url']))));
				}
				$newGravatar = $gravatarAPI->saveUrl($gravatarURL, 0);
				$gravatarAPI->useUserimage($newGravatar, $email);	
			}			
		}
		
		protected function convertToArray($object) {
			if(!is_object($object) && !is_array($object)) {
				return $object;
			}						
			return array_map(array($this, __FUNCTION__), (array)$object);
		}
	}
?>
