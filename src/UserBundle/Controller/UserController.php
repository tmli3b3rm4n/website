<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\UserBundle;

/**
 * Class UserController
 * @package UserBundle\Controller
 */
class UserController extends Controller
{
    public function __construct(UserBundle $bundle)
    {
    }
}