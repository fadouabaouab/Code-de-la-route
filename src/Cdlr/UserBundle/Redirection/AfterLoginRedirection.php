<?php
/**
 * @copyright  Copyright (c) 2009-2014 Steven TITREN - www.webaki.com
 * @package    Webaki\UserBundle\Redirection
 * @author     Steven Titren <contact@webaki.com>
 */
 
namespace Cdlr\UserBundle\Redirection;
 
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
 
class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
 
    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
 
    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // On récupère la liste des rôles d'un utilisateur
        $user = $token->getUser();
        $type = $user->getType();
        // On transforme le tableau d'instance en tableau simple
//        $rolesTab = array_map(function($role){ 
//          return $role->getRole(); 
//        }, $roles);
        // S'il s'agit d'un admin ou d'un super admin on le redirige vers le backoffice
        if ($type==1)
            $redirection = new RedirectResponse($this->router->generate('admin_homepage'));
        // sinon, s'il s'agit d'un commercial on le redirige vers le CRM
        elseif ($type==2)
            $redirection = new RedirectResponse($this->router->generate('candidat_homepage'));
        elseif ($type==3)
            $redirection = new RedirectResponse($this->router->generate('gerant_homepage'));
        // sinon il s'agit d'un membre
        else
            $redirection = new RedirectResponse($this->router->generate('moniteur_homepage'));
 
        return $redirection;
    }
}