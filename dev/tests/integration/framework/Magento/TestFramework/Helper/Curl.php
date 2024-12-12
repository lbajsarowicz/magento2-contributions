<?php
/**
 * Copyright 2018 Adobe
 * All Rights Reserved.
 */
declare(strict_types=1);

namespace Magento\TestFramework\Helper;

use Magento\Framework\HTTP\Client\Curl as CurlLibrary;

/**
 * @deprecated All the curl methods are included in \Magento\Framework\HTTP\Client\Curl class.
 * @see \Magento\Framework\HTTP\Client\Curl
 */
class Curl extends CurlLibrary
{
}
