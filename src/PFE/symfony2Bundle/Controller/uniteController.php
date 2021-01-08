<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PFE\symfony2Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\grandeurMesureType;
use PFE\symfony2Bundle\Entity\grandeurMesure;
/**
 * Description of uniteController
 *
 * @author Standard
 */
class uniteController extends Controller{
    public function Ajout_uniteAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:grandeurMesure')->findAll();
	$capte=new grandeurMesure();
        
	$form=$this->createForm(new grandeurMesureType(),$capte);
	$request=$this->get('request');
       
	if($request->isMethod('POST'))
            
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($capte);
		$cnx->flush();
	}
return $this->render('applicationBundle:unite:form_unite.html.twig',array('form'=> $form->CreateView(),'res'=>$resultat));
    
}
}
