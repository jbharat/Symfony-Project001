<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Twig\Environment;


class QuestionController extends AbstractController
{
	/**
	 * @Route("/" , name="app_homepage")
	 */
	public function homepage()
	{
		//return new Response("This is first message from symfony <a href='./questions/future-page-for-questions'>Question 1</a>");
		return $this->render('question/homepage.html.twig');
	 //   $html = $twigEnv->render('question/homepage.html.twig');
	  //  Return new Response($html);
	}

	/**
	 * @Route("/questions/{slug}" , name="app_question_show")
	 */
	public function show($slug)
	{
		$answers = ['First','Second','Third'];

		dump($this);
		//dd($slug, $this);
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
