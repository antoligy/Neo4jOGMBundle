<?php

namespace antoligy\Neo4jOGMBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

	public function getConfigTreeBuilder() {

		$treeBuilder = new TreeBuilder();

		$rootNode = $treeBuilder->root('neo4j_ogm');
		$rootNode->children()
			->scalarNode('host')->defaultValue('localhost')->end()
			->scalarNode('port')->defaultValue('7474')->end()
			->end();

		return $treeBuilder;
	}
}
