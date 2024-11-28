<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\TestFramework\Helper;

use Magento\Framework\HTTP\Client\Curl as CurlLibrary;

/**
 * @deprecated All the curl methods are included in \Magento\Framework\HTTP\Client\Curl class.
 * @see  \Magento\Framework\HTTP\Client\Curl::delete() when you want to use delete method
 */
class Curl extends CurlLibrary
{
    /**
     * Make DELETE request
     *
     * String type was added to parameter $param in order to support sending JSON or XML requests.
     * This feature was added base on Community Pull Request https://github.com/magento/magento2/pull/8373
     *
     * @param string $uri
     * @param array|string $params
     * @return void
     *
     * @see \Magento\Framework\HTTP\Client#post($uri, $params)
     */
    public function delete(string $uri, array|string $params = [])
    {
        $this->makeRequest("DELETE", $uri, $params);
    }
}
