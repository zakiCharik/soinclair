<?php


namespace App\Service;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Security;

class AfterLogoutRedirection implements LogoutSuccessHandlerInterface
{
    /**
     * @var RouterInterface
     */
    private $router;
    /**
     * @var Security
     */
    private $security;

    /**
     * @param RouterInterface $router
     * @param Security $security
     */
    public function __construct(RouterInterface $router, Security $security)
    {
        $this->router = $router;
        $this->security = $security;
    }
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function onLogoutSuccess(Request $request)
    {
        // Get list of roles for current user
        $roles = $this->security->getToken()->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);
        // If is a commercial user or admin or super admin we redirect to the login area. Here we used FoseUserBundle bundle
        if (in_array('ROLE_ADHERANT', $rolesTab, true) || in_array('ROLE_ADMIN', $rolesTab, true) )
            $response = new RedirectResponse($this->router->generate('app_login'));
        // otherwise we redirect user to the homepage of website
        else
            $response = new RedirectResponse($this->router->generate('home_page'));

        return $response;
    }
}