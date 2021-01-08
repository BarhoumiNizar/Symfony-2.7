<?php
namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFE\symfony2Bundle\Form\UtilisateurType;
use PFE\symfony2Bundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use PFE\symfony2Bundle\Entity\SessionUser;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class UsersController extends Controller
{
    public function AuthentificationAction()
    {
	  $request=$this->get('request');
          
	 if($request->isMethod('POST'))
	 {
	    $email=$request->get('username');
		$password=$request->get('password');
		$cnx=$this->getDoctrine()->getManager();
		$req=$cnx->getRepository('applicationBundle:Utilisateur')->findOneBy(array('login'=>$email,'motpasse'=>$password));
		$row=count($req);
		if($row>0)
		{
	    $users=new SessionUser();
		$session=new Session();
		$session->set('utilisat',$req);
                $session->set('id',$req->getId());
                
                $user=$req->getNomUtilisateur();
                $debut=date("Y-m-d");
                $users->setUser($user);
                 $users->setDateDebutSession($debut);
                 $users->setDateFinSession("0000-00-00");
                 $cnx->persist($users);
                 $cnx->flush();
		return $this->redirect($this->generateURL('application_form_Affich_user'));
              
		}
		else
		echo '<div class="error">Le nom d utilisateur ou le mot de passe que vous avez saisi est incorrect</div>' ;
		
	 }
              
	   return $this->render('applicationBundle:Users:login.html_1.twig');
    }
    
	public function SupprimerAction($id)
    {
	   $cnx=$this->getDoctrine()->getManager();
		$delete=$cnx->getRepository('applicationBundle:Utilisateur')->find($id);
		$cnx->remove($delete);
		$cnx->flush();
        return $this->redirect($this->generateURL('application_form_Affich_user'));
    }
    
	public function ModifierAction($id)
    {     
	   $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:Utilisateur')->find($id);
		
		$form=$this->createForm(new UtilisateurType(),$modif);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
            $photo=$request->files->get('Utilisateur');
		$form->bind($request);
              
            $modif->Upload();
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
             
		return $this->redirect($this->generateURL('application_form_Affich_user'));
	}
       return $this->render('applicationBundle:Users:form_User.html.twig',array('form'=> $form->CreateView()));
    }
	public function Ajout_UserAction()
	{
             
	$user=new Utilisateur();
	$form=$this->createForm(new UtilisateurType(),$user);
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		$form->bind($request);
              
                $user->Upload();
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($user);
		$cnx->flush();
                 $message='Acteur ajouté avec succès !'; 
        }
	return $this->render('applicationBundle:Users:form_User.html.twig',array('form'=> $form->CreateView(),'message' => $message));
	}
	public function Affiche_UserAction()
	{
		$cnx=$this->getDoctrine()->getManager();
              
		$resultat=$cnx->getRepository('applicationBundle:Utilisateur')->findAll();//Select *
		return $this->render('applicationBundle:Users:affich_User.html.twig',array('res'=>$resultat));
	}
         public function DeconnexionAction()
    {
         $session=new Session();
         
         $dFin=date("Y-m-d");
         
         $cnx=$this->getDoctrine()->getManager();
         $user=$session->get('utilisat')->getNomUtilisateur();
         $resultat=$cnx->getRepository('applicationBundle:SessionUser')->findOneBy(array('dateDebutSession'=>date('Y-m-d'),
                                                                                          'user'=> $user,
                                                                                          ),
                            array('id'=>'DESC'));
           
          
         $id=$resultat->getId();
       $q = $cnx->createQueryBuilder()
			->update('applicationBundle:SessionUser', 'upd')
			->set('upd.dateFinSession', '?1')
			
			->where('upd.id = ?2')
			->setParameter(1, $dFin)
                 //comment récupérer dans un controller le nom de user connecté
			->setParameter(2, $id)
			->getQuery();
		     $q->execute();
         
         
         $session->clear();
         return $this->redirect($this->generateURL('application_usersauthentication'));
         
        
    
}
private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))->add('id', 'hidden')->getForm();
}

public function rechercheAction(request $request)
{
    $em = $this->getDoctrine()->getManager();
    $request=$this->get('request');
    $motcle=$request->get('motcle');
   $listuser = $em->getRepository('applicationBundle:Utilisateur')->findBy(array('nomUtilisateur'=>$motcle));
 $entities=$this->get('knp-paginator')->paginate(
         $listuser,
         $request->query->get('page',1));
    return $this->render('applicationBundle:Users:starter.html.twig',array('entities'=>$entities));
       
}
public function showAction($id)
{
    $cnx=$this->getDoctrine()->getManager();
		$modif=$cnx->getRepository('applicationBundle:Utilisateur')->find($id);
 
    
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($modif);
		$cnx->flush();
		return $this->redirect($this->generateURL('show_User'));
        }
                return $this->render('applicationBundle:Users:show.html.twig',array('res'=> $modif));
                
	
}
public function profilAction()
{
    $cnx=$this->getDoctrine()->getManager();
		$affich=$cnx->getRepository('applicationBundle:Utilisateur')->findAll();
 
    
	$request=$this->get('request');
	if($request->isMethod('POST'))
	{
		
		//connexion avec Doctrine
		$cnx=$this->getDoctrine()->getManager();
		$cnx->persist($affich);
		$cnx->flush();
		return $this->redirect($this->generateURL('show_Profil'));
        }
                return $this->render('applicationBundle:Users:profil.html.twig',array('app'=> $affich));
                
	
}
}