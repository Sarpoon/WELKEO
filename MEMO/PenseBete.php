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


Request !!

	$request = $this->getRequest();

    	if($request->getMethod() == 'POST'){
    		$session = get('session');
    		$session->setFlash('info',"L'article a bien été ajouté");

    		return $this->redirect($this->generateUrl('admin_homepage'));
    	}
        return $this->render('AdminBundle:Admin:product.html.twig');

Form Categories !!

	->add('categoryId', ChoiceType::class, array(
                'choices' => array(
                    new Category('Produits emballés'),
                    new Category('Produits en conserves et conditionnés'),
                    new Category('Viandes et poissons'),
                    new Category('Boissons'),
                    new Category('Divers'),
                ),
                'choice_label' => function($category, $key, $index) {
                    /** @var Category $category */
                    return strtoupper($category->getName());
                },
                'choice_attr' => function($category, $key, $index) {
                    return ['class' => 'category_'.strtolower($category->getName())];
                },
            ))

Backup Create $product !!
	

            $product->setName($form['name']);
            $product->setPrice($form['price']);
            $product->setCountryId($form['countryId']);
            $product->setShopId($form['shopId']);
            $product->setIsPromoted($form['isPromoted']);
            $product->setTeaser($form['teaser']);
            $product->setMainDescription($form['mainDescription']);
            $product->setAdditionalDescription1($form['additionalDescription1']);
            $product->setAdditionalDescription2($form['additionalDescription2']);
            $product->setAdditionalDescription3($form['additionalDescription3']);
            $product->setComment($form['comment']);


            // Enregistrement de la categorie
            
            $repository = $this->getDoctrine()
                ->getRepository('MainBundle:Category');

            $categoryId = (int)$form['categoryId'];

            $categoryValue = $repository->find($categoryId);

            $product->setCategoryId($categoryValue);


Affichage flash!!

	
          {% for k, v in app.session.flashbag.all() %}
            <span class="{{ k }}">{{ v }}</span>
          {% endfor %}
           