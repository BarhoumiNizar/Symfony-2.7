<?php
namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\CaptureType;
use PFE\symfony2Bundle\Entity\Capture;
class CapturesController extends Controller
{
    
	public function Ajout_CaptureAction()
	{
	$capt=new Capture();
	$form=$this->createForm(new CaptureType(),$capt);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($capt);
               //$cnx->persist($capt->getCapteurId());
                
		$cnx->flush();
	}
	return $this->render('applicationBundle:Captures:form_Capture.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_CaptureAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:Capture')->findAll();//Select *
		return $this->render('applicationBundle:Captures:affich_Capture.html.twig',array('res'=>$resultat));
	}
        public function SupprimerCaptureAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$delete=$cnx->getRepository('applicationBundle:Capture')->find($id);
		$cnx->remove($delete);
		$cnx->flush();
        return $this->redirect($this->generateURL('application_form_Affich_Capture'));
    }
	public function ModifierCaptureAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:Capture')->find($id);
		
		$form=$this->createForm(new CaptureType(),$modif);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
		return $this->redirect($this->generateURL('application_form_Affich_Capture'));
	}
       return $this->render('applicationBundle:Captures:form_Capture.html.twig',array('form'=> $form->CreateView()));
    }
	
}