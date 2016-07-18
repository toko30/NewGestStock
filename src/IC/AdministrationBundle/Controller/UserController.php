<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\User;
use IC\AdministrationBundle\Form\Type\EtapeType;
use IC\AdministrationBundle\Form\Type\UserType;

class UserController extends Controller
{
    public function gestionUserAction($idUser)
    {   
        $em = $this->getDoctrine()->getManager();
       
        $listeUser = $em->getRepository('ICAdministrationBundle:User')->findAll();

        if($idUser == 0)
        {
            $url = $this->generateUrl('ic_administration_add_user');
            $user = new User();
        }
            
        else
        {
            $url = $this->generateUrl('ic_administration_update_user', array('idUser' =>$idUser));
            $user = $em->getRepository('ICAdministrationBundle:User')->find($idUser);
        }

        $formUser = $this->createForm(UserType::class, $user, array('action' => $url))->createView();

        return $this->render('ICAdministrationBundle:user:user.html.twig', array('partie' => 'Administration',
                                                                                 'idUser' => $idUser,
                                                                                 'listeUser' => $listeUser,
                                                                                 'formUser' => $formUser));
    }

    public function addUserAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $request->get('user');
        $user = new User();

        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $data['username']);

        $user->setUsername($data['username']);
        $user->setPassword($encoded);
        $user->setRoles(array($data['textRole']));
        $user->setTextRole($data['textRole']);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('ic_administration_user');
    }

    public function updateUserAction(request $request, $idUser)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $request->get('user');
        $user = $em->getRepository('ICAdministrationBundle:User')->find($idUser);

        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $data['username']);

        $user->setUsername($data['username']);
        $user->setPassword($encoded);
        $user->setRoles(array($data['textRole']));
        $user->setTextRole($data['textRole']);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('ic_administration_user');
    }

    public function removeUserAction($idUser)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('ICAdministrationBundle:User')->find($idUser);

        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('ic_administration_user');
    }
}
