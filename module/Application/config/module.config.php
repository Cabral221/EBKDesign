<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'apropos' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/apropos',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'apropos',
                    ],
                ],
            ],
            'contact' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/contact',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'contact',
                    ],
                ],
            ],
            'service' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/service',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'service',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/service' => __DIR__ . '/../view/Application/index/service.phtml',
            'application/index/contact' => __DIR__ . '/../view/Application/index/contact.phtml',
            'application/index/apropos' => __DIR__ . '/../view/Application/index/apropos.phtml',
            'application/index/index' => __DIR__ . '/../view/Application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
