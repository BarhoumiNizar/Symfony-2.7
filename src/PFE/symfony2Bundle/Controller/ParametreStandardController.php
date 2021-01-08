<?php
namespace PFE\symfony2Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\ParametreStandardType;
use PFE\symfony2Bundle\Entity\ParametreStandard;

class ParametreStandardController extends Controller{
    public function Ajout_ParamAction()
	{
	$param=new ParametreStandard();
        
	$form=$this->createForm(new ParametreStandardType(),$param);
	$request=$this->get('request');
       
	if($request->isMethod('POST'))
            
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($param);
                 
		$cnx->flush();
	}
        
	return $this->render('applicationBundle:ParametreStandard:Ajout_param.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_ParamAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:ParametreStandard')->findAll();//Select *
		return $this->render('applicationBundle:ParametreStandard:affich_param.html.twig',array('res'=>$resultat));
	}
}
