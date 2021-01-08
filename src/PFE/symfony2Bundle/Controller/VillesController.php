<?php


namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\villeType;
use PFE\symfony2Bundle\Entity\ville;

class VillesController extends Controller
{
    public function Ajout_VilleAction()
	{
	$pos=new ville();
        
	$form=$this->createForm(new villeType(),$pos);
	$request=$this->get('request');
       
	if($request->isMethod('POST'))
            
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($pos);
                 
		$cnx->flush();
	}
        
	return $this->render('applicationBundle:Villes:form_Ville.html.twig',array('form'=> $form->CreateView()));
    
    
    
    
    
        } 
    
}