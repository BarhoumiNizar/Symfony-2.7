<?php
namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\typeCapteurType;
use PFE\symfony2Bundle\Entity\typeCapteur;
use Symfony\Component\HttpFoundation\Request;
use PFE\symfony2Bundle\Entity\Capteur;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class typeCapteursController extends Controller
{
    public function Ajout_typeCapteurAction()
	{
	$capte=new typeCapteur();
	$form=$this->createForm(new typeCapteurType(),$capte);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
                $capte->Upload();
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($capte);
                
		$cnx->flush();
	}
	return $this->render('applicationBundle:typeCapteurs:form_typeCapteur.html.twig',array('form'=> $form->CreateView()));
	}
	public function Affiche_typeCapteurAction()
	{
		$cnx=$this->getDoctrine()->getManager();
		$resultat=$cnx->getRepository('applicationBundle:typeCapteur')->findAll();//Select *
		return $this->render('applicationBundle:typeCapteurs:affich_typeCapteur.html.twig',array('res'=>$resultat));
	}
	
        public function SupprimertypeCapteurAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$delete=$cnx->getRepository('applicationBundle:typeCapteur')->find($id);
		$cnx->remove($delete);
		$cnx->flush();
        return $this->redirect($this->generateURL('application_form_Affich_typeCapteur'));
    }
	public function ModifiertypeCapteurAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:typeCapteur')->find($id);
		
		$form=$this->createForm(new typeCapteurType(),$modif);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
                $image=$request->files->get('typeCapteur');
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
		return $this->redirect($this->generateURL('application_form_Affich_typeCapteur'));
	}
       return $this->render('applicationBundle:typeCapteurs:form_typeCapteur.html.twig',array('form'=> $form->CreateView()));
    }
  
  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $typecap = $em
      ->getRepository('applicationBundle:typeCapteur')
      ->find($id);    
    $listCap = $em->getRepository('applicationBundle:Capteur')
      ->findBy(array('typecap' => $typecap));

    return $this->render('applicationBundle:typeCapteurs:view.html.twig', array(
      'typecap'           => $typecap,
      'listCap' => $listCap
    ));
  }
}
	
	
	