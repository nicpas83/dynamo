<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nuevo Registro</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br/> 
    <div class="row">
        <div class="col-lg-6">
            <?php
            echo $this->Form->create($horizontal);

            echo $this->Form->input('seccion', ['type' => 'select','options' => $combo_seccion]);
            echo $this->Form->input('descripcion', ['type' => 'select','options' => $combo_descripcion]);
            echo $this->Form->input('valor actual', ['disabled' => 'disabled', 'type' => 'textarea', 'rows' => 3,]);
            echo $this->Form->input('nuevo valor', ['name' => 'data[Contenido][contenido]','type' => 'textarea', 'rows' => 3,]);
            
            echo $this->Form->input('tmp_id', ['type' => 'hidden']);
            echo $this->Form->input('estado', ['type' => 'hidden', 'value' => 1]);
            echo $this->Form->input('orden', ['type' => 'hidden']);

            echo $this->Form->end($guardar);
            ?>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->