<?php

namespace Futura\ForumBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Futura\UserBundle\Entity\User;

/**
 * Description of Builder
 *
 * @author bartek
 */
class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        //$menu->addChild('Homepage', array('route' => 'ccdn_forum_admin_category_list'));
        $menu->addChild('homepage', array(
            'route' => 'ccdn_forum_user_category_index',
            'routeParameters' => array('forumName' => 'Futura'),
            'label'  => '<img src="/img/logo_futura.png" class="img-responsive navbar-logo" />'
        ));
        
        
        if($this->getUser() instanceof User  && $this->getUser()->isAdmin()){
            $menu->addChild('admin',
                array(
                    'route' => 'ccdn_forum_admin_index',
                    'attributes' => array(
                    'dropdown' => true,
                    'divider_append' => true,
                    'id' => 'notifications',
                ),
                'childrenAttributes' => array(
                    'class' => "dropdown-menu-right",
                )
            ));
            
            
            $menu['admin']->addChild('forum', array(
                'route' => 'ccdn_forum_admin_index',
                'label' => 'Fora'
            ));
            $menu['admin']->addChild('categories', array(
                'route' => 'ccdn_forum_admin_category_list',
                'label' => 'Kategorie'
            ));
            $menu['admin']->addChild('boards', array(
                'route' => 'ccdn_forum_admin_board_list',
                'label' => 'Dyskusje'
            ));
        }
        

        return $menu;
    }
    
    
    
    private function getUser(){
        return $this->container->get('security.context')->getToken()->getUser();
    }
    
}