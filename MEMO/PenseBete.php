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

Query Builder !!
	
	$repository = $this->getDoctrine()
	->getRepository('AppBundle:Product');
	// createQueryBuilder automatically selects FROM AppBundle:Product
	// and aliases it to "p"

	$query = $repository->createQueryBuilder('p')
		->where('p.price > :price')
		->setParameter('price', '19.99')
		->orderBy('p.price', 'ASC')
		->getQuery();
	
	$products = $query->getResult();
	// to get just one result:
	// $product = $query->setMaxResults(1)->getOneOrNullResult();	