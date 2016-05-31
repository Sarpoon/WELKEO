Récuperer data url !!

	URL : 
		www.welinkeo.com/article?token=234567235273657
	Controller : 
		'token' => $this->getRequest()->query->get('token');

Utiliser Cookies !!

	Controller : 
		$cookies = $this->getRequest()->cookies;
		$cookies->set('pseudo','sarpoon');

		$pseudo = $cookies->get('pseudo');

Utiliser Sessions !!

	Controller :
		$session = $this->get('session');
		$session->set('date', new \DateTime());

		$date = $session->get('date');