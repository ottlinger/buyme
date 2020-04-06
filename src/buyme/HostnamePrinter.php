<?php
declare(strict_types=1);

namespace buyme;

class HostnamePrinter
{
    public function mailLink($linkText = NULL)
    {
        $serverName = $this->hostname();
        return '<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#98;&#117;&#121;&#109;&#101;&#64;' . $serverName . '">' . ($linkText ?? $serverName) . '</a>';
    }

    public function hostname()
    {
        return trim($_SERVER['SERVER_NAME'] ?? '             localhorst');
    }

    public function time()
    {
        return date("Y-m-d H:i:s");
    }

}
