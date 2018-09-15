<?php

class SitemapsController extends AppController {

    var $name = 'Sitemaps';
    var $uses = array('Content');
    var $components = array('RequestHandler');
    var $helpers = array('Time');

    function index() {
        $this->layout = "rssxml";
        $this->set('posts', $this->Content->find('all', array('fields' => array('modified', 'id', 'slug'))));
        $this->RequestHandler->respondAs('xml');
        //debug logs will destroy xml format, make sure were not in drbug mode
        Configure::write('debug', 0);
    }

}
