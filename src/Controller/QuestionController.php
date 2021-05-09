<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return new Response("This is first message from symfony <a href='./questions/future-page-for-questions'>Question 1</a>");
	}

	/**
	 * @Route("/questions/{slug}")
	 */
	public function show($slug)
	{
		$answers = ['First','Second','Third'];
		return $this->render('question/show.html.twig',[
			'question' => ucwords(str_replace('-',' ',$slug)),
			'answers' => $answers
		]);
	
		/*  return new Response(sprintf(
			'Future page to show a question "%s"!',
		 	ucwords(str_replace('-',' ',$slug))
			)); */
	}
}
