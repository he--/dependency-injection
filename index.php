<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Vox\Treinamento\Exercicio1\Exercicio1Extension;

require 'vendor/autoload.php';

Debug::enable();

$container = new ContainerBuilder();
$extension = new Exercicio1Extension();
$container->registerExtension($extension);
$container->loadFromExtension($extension->getAlias());
//$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Resources/config'));
//$loader->load('services.yml');

$container->setParameter('exercicio1.numero_pedido' , 2);
$container->compile();


$pedido = $container->get('exercicio1.pedido');

//$container->setParameter('exercicio1.espresso');

$espresso = $container->get('exercicio1.espresso');
$espresso->addAdicional($container->get('exercicio1.chocolate'));
$espresso->addAdicional($container->get('exercicio1.rapadura'));

$pedido->addPedido($espresso);
        

var_dump($pedido->toString());