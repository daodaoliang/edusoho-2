<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/2
 * Time: 17:59
 */

namespace Topxia\WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefauController extends Controller
{
    /**
     * @Route("/Defau", name="Defau_index")
     */
    public function indexAction()
    {
        return new Response('Hello world!');
    }

}