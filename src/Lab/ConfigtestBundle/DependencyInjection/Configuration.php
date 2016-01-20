<?php
namespace Lab\ConfigtestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lab_configtest');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        $this->addWebServiceSection($rootNode);

        return $treeBuilder;
    }

    /**
     * Adds section of setting to gloabl config.
     *
     * @param ArrayNodeDefinition $rootNode The root node of the config for this bundle.
     *
     * @return void
     */
    private function addWebServiceSection(ArrayNodeDefinition $rootNode)
    {
        $rootNode
          ->children()
            ->arrayNode('services')->addDefaultsIfNotSet()->canBeUnset()
              ->children()

                ->arrayNode('service1')->addDefaultsIfNotSet()->canBeUnset()
                  ->children()
                    ->scalarNode('url')->defaultValue("http://default-url-1.com")->cannotBeEmpty()->end()
                    ->scalarNode('user')->defaultValue("user1")->end()
                    ->scalarNode('password')->defaultValue("user1")->end()
                    ->arrayNode('allow_ip')->prototype('scalar')->end()->end()
                  ->end()
                ->end()

                ->arrayNode('service2')->addDefaultsIfNotSet()->canBeUnset()
                  ->children()
                    ->scalarNode('url')->defaultValue("http://default-url-2.com")->cannotBeEmpty()->end()
                    ->scalarNode('user')->defaultValue("user1")->end()
                    ->scalarNode('password')->defaultValue("user1")->end()
                    ->arrayNode('allow_ip')->prototype('scalar')->end()->end()
                  ->end()
                ->end()

          ->end()
        ->end();
    }
}
