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

    public function afterFind($results, $primary = false) {

        if (isset($results[0]['Contenido']['estado'])) {

            foreach ($results as $key => $val) {
                if ($val['Contenido']['estado'] == '1') {
                    $results[$key]['Contenido']['estado'] = 'Activo';
                } else {
                    $results[$key]['Contenido']['estado'] = 'Inactivo';
                }
            }
        }
        return $results;
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

    public function activar_registro($activarId) {

        //desactivo el contenido actual.
        $nro_orden = $this->findById($activarId);
        $nro_orden = $nro_orden['Contenido']['orden'];
        
        $desactivar = $this->find('first', array(
            'conditions' => ['orden' => $nro_orden, 'estado' => 1]
        ));
        $this->id = intval($desactivar['Contenido']['id']);
        $this->saveField('estado', 0);
        
        //activo el nuevo contenido
        $this->id = $activarId;
        $this->saveField('estado', 1);
        
    }

}
