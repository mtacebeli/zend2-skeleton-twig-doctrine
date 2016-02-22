<?php

namespace App\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		return new ViewModel();
	}

	public function loginAction()
	{

		$em = $this->getServiceLocator()->get(
			'doctrine.entitymanager.orm_default'
		);


		return new ViewModel();
	}
}
