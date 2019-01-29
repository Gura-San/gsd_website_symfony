<?php
	/**
	 * Created by PhpStorm.
	 * User: davidg
	 * Date: 2019-01-28
	 * Time: 20:44
	 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class gsdController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function showAction()
	{
		return $this->render('index.html.twig');
	}
}