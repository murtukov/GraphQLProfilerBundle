<?php

declare(strict_types=1);

namespace Overblog\GraphQL\ProfilerBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class GraphQLProfilerExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter($this->getAlias().'.query_match', $config['query_match']);
    }
}