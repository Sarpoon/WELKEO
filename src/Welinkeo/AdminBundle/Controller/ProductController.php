<?php

namespace Welinkeo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Welinkeo\MainBundle\Entity\Product;
use Welinkeo\MainBundle\Entity\Category;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductController extends Controller
{
    public function indexAction(Request $request)
    {   

        //***************************   Mise en place du formulaire d'ajout d'un produit !!   **************************


        $product = new Product();

        $form = $this->createFormBuilder($product)
        ->add('name', TextType::class)
        ->add('price', MoneyType::class)
        ->add('categoryId', EntityType::class, array(
            // query choices from this entity
            'class' => 'MainBundle:Category',

            'property' => 'name',
            'expanded' => false,
            'multiple' => false,
            'label' => "Catégorie",

            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('cat')
                    ->where('cat.parentId = :id')
                    ->setParameter('id', '1')
                    ->orderBy('cat.id', 'ASC');
            },

            // use the User.username property as the visible option string
            'choice_label' => 'name',

            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ))
        ->add('countryId', ChoiceType::class, array(
                                            'choices'  => array(
                                                        1 => 'Congo',
                                                        2 => 'France',
                                                        ),
                                            )
            )

        ->add('shopId', ChoiceType::class, array(
                                            'choices'  => array(
                                                        1 => 'kinshasa',
                                                        2 => 'Paris',
                                                        ),
                                            )
            )
        
        ->add('status', ChoiceType::class, array(
                                            'choices'  => array(
                                                        0 => 'En stock',
                                                        1 => 'Derniers éléments disponnibles',
                                                        2 => 'Epuisé',
                                                        ),
                                            )
            )



        ->add('photo1', FileType::class, array('required' => false))
        ->add('photo2', FileType::class, array('required' => false))
        ->add('photo3', FileType::class, array('required' => false))
        ->add('photo4', FileType::class, array('required' => false))
        ->add('photo5', FileType::class, array('required' => false))

        ->add('isPromoted', CheckboxType::class, array('required' => false))
        ->add('promotion', IntegerType::class, array('required' => false))

        ->add('teaser', TextType::class)
        ->add('mainDescription', TextType::class)
        ->add('additionalDescription1', TextType::class, array('required' => false))
        ->add('additionalDescription2', TextType::class, array('required' => false))
        ->add('additionalDescription3', TextType::class, array('required' => false))

        ->add('comment', TextType::class, array('required' => false))

        ->add('save', SubmitType::class, array('label' => 'Create Product'))
        ->getForm();


        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            if($product->getphoto1()){

                // $file stores the uploaded photo file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $photo1 = $product->getPhoto1();

                // Generate a unique name for the file before saving it
                $photo1Name = md5(uniqid()).'.'.$photo1->guessExtension();

                // Move the file to the directory where brochures are stored
                $photo1->move(
                    $this->container->getParameter('product_photo_directory'),
                    $photo1Name
                );

                // Update the 'brochure' property to store the PDF file name
                // instead of its contents
                $product->setPhoto1($photo1Name);
            }

            if($product->getphoto2()){
                $photo2 = $product->getPhoto2();
                $photo2Name = md5(uniqid()).'.'.$photo2->guessExtension();
                $photo2->move(
                    $this->container->getParameter('product_photo_directory'),
                    $photo2Name
                );
                $product->setPhoto2($photo1Name);
            }

            if($product->getphoto3()){
                $photo3 = $product->getPhoto3();
                $photo3Name = md5(uniqid()).'.'.$photo3->guessExtension();
                $photo3->move(
                    $this->container->getParameter('product_photo_directory'),
                    $photo3Name
                );
                $product->setPhoto3($photo1Name);
            }

            if($product->getphoto4()){
                $photo4 = $product->getPhoto4();
                $photo4Name = md5(uniqid()).'.'.$photo4->guessExtension();
                $photo4->move(
                    $this->container->getParameter('product_photo_directory'),
                    $photo4Name
                );
                $product->setPhoto4($photo1Name);
            }

            if($product->getphoto5()){
                $photo5 = $product->getPhoto5();
                $photo5Name = md5(uniqid()).'.'.$photo5->guessExtension();
                $photo5->move(
                    $this->container->getParameter('product_photo_directory'),
                    $photo5Name
                );
                $product->setPhoto5($photo1Name);
            }



            // On l'enregistre notre objet $advert dans la base de données

            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($product);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            

            return $this->render('AdminBundle:Admin:product.html.twig', array(
            'form' => $form->createView(),
            ));
        }




        //**********************************   Fin traitement Formulaire ajout produit ***************************************


        //**********************************   Affichage des tous les produits ***********************************************


        $repositoryProducts = $this->getDoctrine()
            ->getRepository('MainBundle:Product');

        /*
        $query = $repository->createQueryBuilder('p')
            ->where('p.price > :price')
            ->setParameter('price', '19.99')
            ->orderBy('p.price', 'ASC')
            ->getQuery();
        */


        // find *all* products
        $productsquery = $repositoryProducts->findAll();




        return $this->render('AdminBundle:Admin:product.html.twig', array(
        'form' => $form->createView(),
        'products' => $productsquery,
        ));                              

    	
    }

	public function storeAction()
    {

        return $this->render('AdminBundle:Admin:product.html.twig');
    }

    public function editAction()
    {

        return $this->render('AdminBundle:Admin:product.html.twig');
    }

    public function deleteAction()
    {

        return $this->render('AdminBundle:Admin:product.html.twig');
    }


}
