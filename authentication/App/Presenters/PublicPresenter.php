<?php declare(strict_types=1);

namespace App\Presenters;

abstract class PublicPresenter extends BaseAppPresenter
{
	public function checkRequirements()
	{
		// allow to everyone
	}
}
