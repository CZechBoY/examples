<?php declare(strict_types=1);

namespace App\Presenters;

use Nette\Application\UI\Form;

final class SignInPresenter extends PublicPresenter
{
	/**
	 * @var SignInFormFactory
	 */
	private $signInFormFactory;

	public function __construct(SignInFormFactory $signInFormFactory)
	{
		$this->signInFormFactory = $signInFormFactory;
	}
	
	protected function createComponentSignInForm(): Form
	{
		return $this->signInFormFactory->create();
	}
}
