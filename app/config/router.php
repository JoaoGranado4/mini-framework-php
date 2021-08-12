<?php

$this->get('/', function () {
    echo "Home!!!";
});

$this->get('/home', function () {
    echo "Estou na Home";
});

$this->get('/about/test', function () {
    echo "Estou na about test";
});

$this->get('/categoria', 'MyController@method');
