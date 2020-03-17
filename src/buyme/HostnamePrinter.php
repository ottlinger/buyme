<?php
declare(strict_types=1);

namespace buyme;

class HostnamePrinter
{
	public function hostname()
	{
		return $_SERVER['SERVER_NAME'] ?? 'localhorst';
	}
}
