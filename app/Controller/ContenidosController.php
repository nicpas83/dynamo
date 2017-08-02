<?php

App::uses('AppController', 'Controller');

// pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ContenidosController extends AppController {

    function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'moduloAdm';
    }

    public function index($estado = 1) {

        if ($estado == 0) {
            $var = array(
                'titulo' => 'Contenidos Inactivos',
                'linkBtn' => 'Ver Activos',
                'estado' => 1,
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'eliminar' => 'btn btn-primary btn-xs fa fa-trash-o pull-right',
                    'activar' => 'btn btn-primary btn-xs fa fa-check-square-o pull-right'
                )
            );
        } else {
            $var = array(
                'titulo' => 'Contenidos Activos',
                'linkBtn' => 'Ver Inactivos',
                'estado' => 0,
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'historial' => 'btn btn-primary btn-xs fa fa-history pull-right'
                )
            );
        }
        $this->set('var', $var);
        $this->set('landing', $this->Contenido->find('all', [
                    'order' => ['orden ASC'],
                    'conditions' => ['estado' => $estado]
                        ]
        ));
    }

    public function nuevo() {
        if ($this->request->is('post')) {

            $this->Contenido->create();
            if ($this->Contenido->save($this->request->data)) {
                //actualiza estado del anterior contenido. 
                $this->Contenido->id = intval($this->request->data['Contenido']['tmp_id']);
                $this->Contenido->saveField('estado', 0);

                $this->Flash->success(__('El registro fue guardado.'));
                //return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Error al guardar el registro.'));
            }
        }

        $this->set('combo_seccion', $this->Contenido->combo_seccion());
        $this->set('combo_descripcion', $this->Contenido->crear_combo('descripcion', 'Home'));
    }

    public function editar($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Registro inválido'));
        }
        $result = $this->Contenido->findById($id);
        if (!$result) {
            throw new NotFoundException(__('Registro inválido'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Contenido->id = $id;

//            if ($this->request->data['Contenido']['estado'] == 'Inactivo') {
//                $this->request->data['Contenido']['estado'] = 0;
//            } elseif ($this->request->data['Contenido']['estado'] == 'Activo') {
//                $this->request->data['Contenido']['estado'] = 1;
//            }

            if ($this->Contenido->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado.'));
                return $this->redirect(array('action' => 'index', $this->request->data['Contenido']['estado']));
            }
            $this->Flash->error(__('Error al actualizar el registro.'));
        }

        if (!$this->request->data) {
            $this->request->data = $result;
        }
    }

    public function eliminar($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Contenido->delete($id)) {
            $this->Flash->success(
                    __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                    __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

    public function activar($id = null) {
        $this->autoRender = false;
        $this->Contenido->activar_registro($id);
        return $this->redirect(array('action' => 'index'));
    }

    public function combo_seccion($name) {
        $this->autoRender = false;
        return $this->Contenido->crear_combo($name);
    }

    public function actualizarComboAnidado($nuevoCombo, $relacionadoA) {
        $this->autoRender = false;
        return $this->Contenido->crear_combo($nuevoCombo, $relacionadoA);
    }

    public function obtenerContenido() {
        $this->autoRender = false;
        if (isset($_POST) && !empty($_POST['seccion']) && !empty($_POST['descripcion'])) {
            $data = $this->Contenido->buscar_registro($_POST['seccion'], $_POST['descripcion']);
        }
        return json_encode($data[0]['Contenido']);
    }

}
