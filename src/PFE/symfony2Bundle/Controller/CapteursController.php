<?php
namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\CapteurType;
use PFE\symfony2Bundle\Entity\Capteur;

class CapteursController extends Controller
{
	public function Ajout_CapteurAction()
	{
	$capte=new Capteur();
        
	$form=$this->createForm(new CapteurType(),$capte);
	$request=$this->get('request');
       
	if($request->isMethod('POST'))
            
	{
		$form->bind($request);
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($capte);
                 $cnx->persist($capte->getTypecapteur());
                 $cnx->persist($capte->getIdOrigine());
		$cnx->flush();
	}
        
	return $this->render('applicationBundle:Capteurs:form_Capteur.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_CapteurAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:Capteur')->findAll();//Select *
		return $this->render('applicationBundle:Capteurs:affich_Capteur.html.twig',array('res'=>$resultat));
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

	public function Localiser_CapteurAction($id){
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
	return $this->render('applicationBundle:Capteurs:form_Capteur.html_1.twig',array('form'=> $form->CreateView()));
	}
}