<?php

namespace Ntwklr\Shariff\Services;

use GuzzleHttp\Client;
use Heise\Shariff\Backend as ShariffBackend;
use Heise\Shariff\Backend\BackendManager;
use Heise\Shariff\Backend\ServiceFactory;
use Illuminate\Config\Repository as ConfigRepository;
use Request;

/**
 * Class Backend
 * Extends the default backend to be able to interact with the
 * Request/Response API
 *
 * @package Ntwklr\Shariff
 */
class Backend extends ShariffBackend
{
    /**
     * Backend constructor.
     *
     * @param Cache            $cache
     * @param ConfigRepository $config
     */
    public function __construct(Cache $cache, ConfigRepository $config)
    {
        $config = $config->get('shariff', []);
        $domains = $config['domains'];

        if (count($domains) === 0) {
            $domains[] = Request::getHost();
        }

        $clientOptions = [];
        if (isset($config['client'])) {
            $clientOptions = $config['client'];
        }

        $client = new Client(['defaults' => $clientOptions]);

        $baseCacheKey = md5(json_encode($config));
        $serviceFactory = new ServiceFactory($client);

        $this->backendManager = new BackendManager(
            $baseCacheKey,
            $cache,
            $client,
            $domains,
            $serviceFactory->getServicesByName($config['services'], $config)
        );
    }
}