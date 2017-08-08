<?php

App::uses('AppModel', 'Model');

class Contenido extends AppModel {

    public $useTable = 'adm_contenidos';
    public $validate = array(
        'contenido' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );

    public $virtualFields = array(
        'str_estado' => 'IF(estado = 1, "Activo", "Inactivo")'
    );

    public function landing_page(){
        
        return $this->Find('all', ['fields'=>['contenido'],'order'=>'orden ASC', 'conditions'=>['estado'=>1]]);
        
    }
    
    public function combo_seccion() {

        return $this->find('list', [
                    'fields' => ['seccion', 'seccion'],
                    'group' => ['seccion'],
                    'order' => ['orden ASC']
        ]);
    }

    public function crear_combo($optionName, $condition) {

        $data = $this->find('list', [
            'fields' => [$optionName, $optionName],
            'conditions' => ['seccion' => $condition, 'estado' => 1],
            'order' => ['orden ASC']
        ]);

        return json_encode($data);
    }

    public function buscar_registro($seccion, $descripcion) {

        return $this->find('all', array(
                    'conditions' => array(['seccion' => $seccion], ['descripcion' => $descripcion], ['estado' => 1])
        ));
    }

    public function activar_registro($id) {
        $this->id = $id;
        $this->saveField('estado', 1);
        return true;
    }

    public function desactivar_registro($id) {
        $res = $this->findById($id);
        $nro_orden = $res['Contenido']['orden'];

        $desactivar = $this->find('first', array(
            'conditions' => array('orden' => $nro_orden, 'estado' => 1)
        ));
        $this->id = $desactivar['Contenido']['id'];
        $this->saveField('estado', 0);
        return true;
    }

}
