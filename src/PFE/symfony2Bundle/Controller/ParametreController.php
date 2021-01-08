<?php
namespace PFE\symfony2Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\parametreType;
use PFE\symfony2Bundle\Entity\parametre;

class ParametreController extends Controller{
    public function Ajout_ParamCapAction()
	{
	$param=new parametre();
        
	$form=$this->createForm(new parametreType(),$param);
	$request=$this->get('request');
       
	if($request->isMethod('POST'))
            
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($param);
                 
		$cnx->flush();
	}
        
	return $this->render('applicationBundle:Parametre:Ajout_paramcap.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_ParamAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:ParametreStandard')->findAll();//Select *
		return $this->render('applicationBundle:ParametreStandard:affich_param.html.twig',array('res'=>$resultat));
	}
}
