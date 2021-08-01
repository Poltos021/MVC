<?php 

$this->addRoute(
    'index', 'Index', 'index'
);

$this->addRoute(
    'about-us', 'Index', 'aboutUs'
);
$this->addRoute(
    'test', 'Test', 'test'
);
$this->addRoute(
    'param', 'Test', 'param'
);
$this->addRoute(
    'param/([0-9])+', 'Test', 'param'
);