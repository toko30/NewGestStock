<?php

namespace IC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RedirectController extends Controller
{
    public function redirectionAction()
    {

        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();

        file_put_contents('../var/logs/connexion.log', date("[j/m/y H:i:s]").' '.$this->get('security.token_storage')->getToken()->getUser()->getusername()."\n", FILE_APPEND);

        if(password_verify ($user->getUsername(), $user->getPassword()))
            return $this->redirectToRoute('ic_user_affichage_change_password');
        elseif($user->getRoles()[0] == 'ROLE_COMMERCE')
            return $this->redirectToRoute('ic_affichage_produit_fini_interne');
        else
            return $this->redirectToRoute('ic_affichage_composant_interne');
    }

    public function affichageChangePasswordAction()
    {
        return $this->render('ICUserBundle:security:changePassword.html.twig', array('partie' => null));
    }

    public function changePasswordAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        var_dump($user);
        if($request->get('confpassword') == $request->get('password'))
        {
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $request->get('password'));

            $user->setPassword($encoded);

            $em->persist($user);
            $em->flush();
        }
        else
            return $this->redirectToRoute('ic_user_affichage_change_password');

        if($user->getRoles()[0] == 'ROLE_COMMERCE')
            return $this->redirectToRoute('ic_affichage_produit_fini_interne');
        else
            return $this->redirectToRoute('ic_affichage_composant_interne');
    }
}
