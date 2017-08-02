<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public function beforeFilter() {

        $formHorizontal = [
            'class' => 'form-horizontal',
            'inputDefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'class' => 'form-control',
                'div' => array('class' => 'form-group'),
                'label' => array('class' => 'col-lg-4', 'control-label'),
                'between' => '<div class="col-lg-8">',
                'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'text-danger')),
            )
        ];
        $guardar = array(
            'div' => false,
            'label' => 'Guardar',
            'class' => 'btn btn-default pull-right',
        );
        $cancelar = array(
            'class' => 'btn btn-default pull-right',
        );

        $this->set('horizontal', $formHorizontal);
        $this->set('guardar', $guardar);
        $this->set('cancelar', $cancelar);
    }

}
