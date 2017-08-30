<?php

App::uses('AppModel', 'Model');

class Categoria extends AppModel {

    public $useTable = 'categorias';
    public $virtualFields = array(
        'str_estado' => 'IF(estado = 1, "Activo", "Inactivo")'
    );

    public function activar($id) {
        $this->id = $id;
        $this->saveField('estado', 1);
        return true;
    }

    public function desactivar($id) {
        $this->id = $id;
        $this->saveField('estado', 0);
        return true;
    }

    public function combo_categorias() {

        return $this->find('list', [
                    'fields' => ['id', 'nombre'],
                    'group' => ['nombre'],
                    'order' => ['nombre ASC']
        ]);
    }

}
