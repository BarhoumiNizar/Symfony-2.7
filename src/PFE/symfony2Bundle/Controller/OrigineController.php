<?php
namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\OrigineFabricationType;
use PFE\symfony2Bundle\Entity\OrigineFabrication;

class OrigineController extends Controller
{
	public function Ajout_OrigineAction()
	{
	$origine=new OrigineFabrication();
        
	$form=$this->createForm(new OrigineFabricationType(),$origine);
	$request=$this->get('request');
       
	if($request->isMethod('POST'))
            
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($origine);
                 
		$cnx->flush();
	}
        
	return $this->render('applicationBundle:Origine:form_Origine.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_OrigineAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:OrigineFabrication')->findAll();//Select *
		return $this->render('applicationBundle:Capteurs:affich_Origine.html.twig',array('res'=>$resultat));
	}
	
        public function SupprimerCapteurAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$delete=$cnx->getRepository('applicationBundle:Capteur')->find($id);
		$cnx->remove($delete);
		$cnx->flush();
        return $this->redirect($this->generateURL('application_form_Affich_Capteur'));
    }
	public function ModifierCapteurAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:Capteur')->find($id);
		
		$form=$this->createForm(new CapteurType(),$modif);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
		return $this->redirect($this->generateURL('application_form_Affich_Capteur'));
	}
       return $this->render('applicationBundle:Capteurs:form_Capteur.html.twig',array('form'=> $form->CreateView()));
    }
   public function showCapAction($id)
{
    $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:Capteur')->find($id);
 
    
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
		return $this->redirect($this->generateURL('show_Capteur'));
        }
                return $this->render('applicationBundle:Capteurs:showCap.html.twig',array('res'=> $modif));
                
	
}
}