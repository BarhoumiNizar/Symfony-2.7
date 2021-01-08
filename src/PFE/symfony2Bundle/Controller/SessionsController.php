<?php
namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\SessionType;
use PFE\symfony2Bundle\Entity\SessionUser;

class SessionsController extends Controller
{
	public function Ajout_SessionAction()
	{
	$sess=new SessionUser();
	$form=$this->createForm(new SessionType(),$sess);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($sess);
		$cnx->flush();
	}
	return $this->render('applicationBundle:Sessions:form_Session.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_SessionAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:SessionUser')->findAll();//Select *
		
		return $this->render('applicationBundle:Sessions:affich_Session.html.twig',array('res'=>$resultat));
	}
	
	public function SupprimerSessionAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$delete=$cnx->getRepository('applicationBundle:SessionUser')->find($id);
		$cnx->remove($delete);
		$cnx->flush();
        return $this->redirect($this->generateURL('application_form_Affich_Session'));
    }
	public function ModifierSessionAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:Session')->find($id);
		
		$form=$this->createForm(new SessionType(),$modif);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
		return $this->redirect($this->generateURL('application_form_Affich_Session'));
	}
       return $this->render('applicationBundle:Sessions:form_Session.html.twig',array('form'=> $form->CreateView()));
    }
   
}