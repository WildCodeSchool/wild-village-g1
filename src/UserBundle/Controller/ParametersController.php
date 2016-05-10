<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\Utilisateur;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

class ParametersController extends Controller
{

	public function parametersAction (Request $request)
	{	
	    	$em = $this->getDoctrine()->getManager();

	    	/*$prenom = $request->request->get('prenom');
	        $surname = $request->request->get('surname');
	        $age = $request->request->get('age');
	        $email = $request->request->get('email');
	        $mailispublic= $request->request->get('mailispublic');
	        $ageispublic = $request->request->get('ageispublic');
	        $surnameispublic = $request->request->get('surnameispublic');
	        $firstnameispublic = $request->request->get('firstnameispublic');
	        $username = $request->request->get('username');
	        $bio = $request->request->get('bio');
	        
	        //appel des tables*/
	        $user = $this ->getUser();
	        $repository = $em->getRepository('UserBundle:Utilisateur')->findOneByIdFosUser($user->getId());
	        $repo = $em->getRepository('UserBundle:User')->findOneById($user->getId());
	        
	        return $this->render('UserBundle:Parameters:parameters.html.twig', array(
	            'user'=>$user,
	            'datauser'=>$repository,
	        	'repo'=>$repo,
	        
	        ));
	}
}



    
   
        
  
   