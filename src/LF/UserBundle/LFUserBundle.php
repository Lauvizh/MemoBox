<?php

namespace LF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LFUserBundle extends Bundle
{

	public function getParent()
	{
		return "FOSUserBundle";
	}

}
