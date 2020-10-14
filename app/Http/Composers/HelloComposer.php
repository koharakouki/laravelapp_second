<?php
namespace App\Http\Composers;


use Illminate\View\View;

class HelloComposer {
	public function compose(View $view)
	{
		$view->with('with_message', 'this view is "' . $view->getName() . '"!!');
	}
}