<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ImagenesController extends AppController {

    function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'moduloAdm';
    }

    public function index($estado = null) {

        if ($estado == '0') {
            $configView = array(
                'titulo' => 'Contenidos Inactivos',
                'estado' => 1,
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'eliminar' => 'btn btn-primary btn-xs fa fa-trash-o pull-right',
                    'activar' => 'btn btn-primary btn-xs fa fa-check-square-o pull-right'
                )
            );
        } else {
            $estado = 1;
            $configView = array(
                'titulo' => 'Administrador de Imágenes',
                'estado' => 0,
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'historial' => 'btn btn-primary btn-xs fa fa-history pull-right'
                )
            );
        }
        

        //paso variables a la vista.
        $this->set('configView', $configView);
        $this->set('imagenes', $this->Imagen->find('all', [
                    'order' => ['orden ASC'],
                    'conditions' => ['estado' => $estado]
                        ]
        ));
    }

    public function nuevo() {

        $this->set('combo_categorias', $this->Categoria->combo_categorias());

        if ($this->request->is('post')) {
            $this->Contenido->desactivar($this->request->data['Contenido']['tmp_id']);
            $this->request->data['Contenido']['user_id'] = $this->Auth->user('id');

            $this->Contenido->create();
            if ($this->Contenido->save($this->request->data)) {
                $this->Flash->success('El registro fue guardado.');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Error al guardar el registro.'));
            }
        }
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
            $estado = $this->request->data['Contenido']['estado'];
            $this->Contenido->id = $id;
            if ($this->Contenido->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado.'));
                return $this->redirect(array('action' => 'index', 1));
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
            $this->Flash->success(__('El registro fue eliminado.'));
        } else {
            $this->Flash->error(__('Error al eliminar el registro.'));
        }
        return $this->redirect(array('action' => 'index', 0));
    }

    public function activar($id = null) {
        $this->autoRender = false;  // no tiene vista asociada. 

        if ($id) {
            $this->Contenido->desactivar($id);
            if ($this->Contenido->activar($id)) {
                $this->Flash->success(__('El registro fue activado.'));
                return $this->redirect(array('action' => 'index', 1));
            }
        }
    }

    public function historial($orden) {
        if (!empty($orden)) {
            $configView = array(
                'titulo' => 'Historial',
                'linkBtn' => 'Volver',
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'eliminar' => 'btn btn-primary btn-xs fa fa-trash-o pull-right',
                    'activar' => 'btn btn-primary btn-xs fa fa-check-square-o pull-right'
                )
            );
        }
        //paso variables a la vista.
        $this->set('configView', $configView);
        $this->set('contenidos', $this->Contenido->find('all', [
                    'order' => ['estado DESC'],
                    'conditions' => ['orden' => $orden]
                        ]
        ));
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
