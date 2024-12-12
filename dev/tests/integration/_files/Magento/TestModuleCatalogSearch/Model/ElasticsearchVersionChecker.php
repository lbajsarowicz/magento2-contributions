<?php
/**
 * Copyright 2022 Adobe
 * All Rights Reserved.
 */
declare(strict_types=1);

namespace Magento\TestModuleCatalogSearch\Model;

use Magento\Framework\HTTP\Client\Curl;

/**
 * Retrieve elasticsearch version by curl request
 */
class ElasticsearchVersionChecker
{
    /**
     * @var int
     */
    private $version;

    /**
     * @return int
     */
    public function getVersion() : int
    {
        if (!$this->version) {
            $curl = new Curl();
            $url = 'http://localhost:9200';
            $curl->get($url);
            $curl->addHeader('content-type', 'application/json');
            $data = $curl->getBody();
            $versionData = explode('.', json_decode($data, true)['version']['number']);
            $this->version = (int)array_shift($versionData);
        }

        return $this->version;
    }
}
