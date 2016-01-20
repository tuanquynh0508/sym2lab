<?php
namespace Lab\ConfigtestBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class LabConfigtestExtension extends Extension
{

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        // $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        // $loader->load('services.yml');

        $container->setParameter('lab_configtest.services', $config['services']);

        $container->setParameter('lab_configtest.services.service1.url', $config['services']['service1']['url']);
        $container->setParameter('lab_configtest.services.service1.user', $config['services']['service1']['user']);
        $container->setParameter('lab_configtest.services.service1.password', $config['services']['service1']['password']);
        $container->setParameter('lab_configtest.services.service1.allow_ip', $config['services']['service1']['allow_ip']);

        $container->setParameter('lab_configtest.services.service2.url', $config['services']['service2']['url']);
        $container->setParameter('lab_configtest.services.service2.user', $config['services']['service2']['user']);
        $container->setParameter('lab_configtest.services.service2.password', $config['services']['service2']['password']);
        $container->setParameter('lab_configtest.services.service2.allow_ip', $config['services']['service2']['allow_ip']);
    }
}
