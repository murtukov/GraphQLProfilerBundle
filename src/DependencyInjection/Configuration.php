<?php

declare(strict_types=1);

namespace Overblog\GraphQL\ProfilerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('overblog_graphql_profiler');

        // @phpstan-ignore-next-line
        $treeBuilder->getRootNode()
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('query_match')->defaultNull()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}