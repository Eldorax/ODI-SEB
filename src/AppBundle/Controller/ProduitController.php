<?php
namespace AppBundle\Controller;
use AppBundle\Form\Type\ProduitType;
use AppBundle\Form\Type\AjoutProduitType;
use AppBundle\Form\Type\ModifProduitType;
use AppBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Id\SequenceGenerator;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Classe des action lié au produits.
 */
class ProduitController extends Controller {
    
    /**
     * Controller d'affichage de la liste des produits.
     * redirige vers la bonne page en donction des acces
     * (magasinier ou client).
     */
    public function listProduitAction(Request $request, $message)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        if( $session->get('access') == 'magasinier' )
        {
            $produit = new Produit();
            $form = $this->createForm(ProduitType::class, $produit);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                // Recherche un user correspondant.
                $temp = new \Doctrine\Common\Collections\ArrayCollection;
                $produit = $form->getData();
                $temp=$produit->getVisible();
                $tableau = $temp->toArray();
                for ($i = 0; $i < count($tableau); $i++)
                {
                    $produit = $tableau[$i];
                    if ($produit->getVisible() == 1)
                        $produit->setVisible (0);
                    else
                        $produit->setVisible (1);
                    $em->persist($produit);
                    $em->flush();
                }
            }
            $produits = $em->getRepository(Produit::class)->findAll();
            return $this->render('form/magasinier/list_produits.html.twig', 
                        array('form'=> $form->createView(),
                            'msg' => $message,
                            'produits' => $produits)) ;
        }
        else
        {
            $produits = $em->getRepository(Produit::class)->findBy(array('visible' => true));
            return $this->render('produits/list_produits.twig',
                            ['produits' => $produits, 'msg' => $message]);
        }
    }
    
    
    /**
     * Page d'ajout d'un produit.
     */
    public function ajouterProduitAction(Request $request, $message) 
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        if( $session->get('access') == 'magasinier' )
        {
            $produit = new Produit();
            $temp = new Produit();
            //$file = new UploadedFile;
            $dir = '/home/jdev/Images';
            $form = $this->createForm(AjoutProduitType::class, $produit);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $produit = $form->getData();
                
                /*$file = $produit->getPhoto();
                if ($file->isValid())
                {
                //$extension = $file->guessExtension();
                //if(!$extension)
                //    $extension = 'img';
                //$endfile = rand(1,99999).'.'.$extension;
                    $file->move($dir, 'photo.jpg');
                //$produit->setPhoto($dir.$endfile);
                }
                else
                    $produit->setPhoto($file->getErrorMessage());*/
                $produits = $em->getRepository(Produit::class)->findAll();
                
                if( count($produits) > 0)
                {
                    $temp   = $produits[0];
                    $newId  = $temp->getNumproduit();
                    for ($i = 1; $i < count($produits); $i++)
                    {
                        $temp = $produits[$i];
                        if($temp->getNumproduit() > $newId)
                        {
                            $newId = $temp->getNumproduit();
                        }
                    }
                }
                else 
                {
                    $newId = -1;
                }
                $produit->setnumproduit($newId + 1);
                $em->persist($produit);
                $em->flush();
                $message = 'Produit ajouter';
            }
            return $this->render('form/magasinier/ajout_produits.html.twig', 
                        array('form'=> $form->createView(),
                            'msg' => $message));
        }
        else
        {
            return $this->redirectToRoute('listproduit',
                    array('message' => "vous n'avez pas accés à cette page"));
        }
    }
    
    /**
     * Page de modification d'un produit.
     * @param string $message Message de validation. 
     */
    public function modifierProduitAction(Request $request, $message) 
    {   
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        if( $session->get('access') == 'magasinier' )
        {
            $produit = new Produit();
            $form = $this->createForm(ModifProduitType::class, $produit);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $produit = $form->getData();
                $ajout = $produit->getQte();
                $produit = $produit->getNumproduit();
                $produit->setQte($produit->getQte() + $ajout);
                $message = 'Ajout effectué';
                $em->persist($produit);
                $em->flush();
            }
            return $this->render('form/magasinier/modif_produits.html.twig', 
                        array('form'=> $form->createView(),
                            'msg' => $message));
        }
        else
        {
            return $this->redirectToRoute('listproduit',
                    array('message' => "vous n'avez pas accés à cette page"));
        }
    }
    
    /**
     * Page de téléchargement des produits
     * au format csv.
     * @param string $message Message de validation. 
     */
    public function telechargerProduitAction(Request $request, $message) 
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        if( $session->get('access') == 'magasinier' )
        {
            $produits = $em->getRepository(Produit::class)->findAll();
            $response = $this->render('produits/export.csv.twig',
                                    array('produits' => $produits,
                                        'msg' => $message)); 
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');
            return $response;
        }
        else 
        {
            return $this->redirectToRoute('listproduit',
                    array('message' => "vous n'avez pas accés à cette page"));
        }
    }
    
    /**
     * Page des alertes sur les produits pour le magasinier.
     * @param string $message Message de validation. 
     */    
    public function alerteProduitAction(Request $request, $message) 
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        if( $session->get('access') == 'magasinier' )
        {
            $dateactu = date('Y-m-d');
            $query = $em->createQuery("SELECT p FROM AppBundle:Produit p WHERE p.qte < p.qtemin");
            $produitsqte = $query->getResult();
            $query = $em->createQuery("SELECT p FROM AppBundle:Produit p WHERE p.peremption < '".$dateactu."'");
            $produitsperim = $query->getResult();
            return $this->render('produits/alerte.html.twig',
                                    array('produitsqte' => $produitsqte,
                                        'produitsperim' => $produitsperim,
                                        'msg' => $message));
        }
        else 
        {
            return $this->redirectToRoute('listproduit',
                    array('message' => "vous n'avez pas accés à cette page"));
        }
    }
    
}