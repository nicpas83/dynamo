<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Registro</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br/> 
    <div class="row">
        <div class="col-lg-6">
            <?php            

            echo $this->Form->create($horizontal);

            echo $this->Form->input('seccion', ['disabled' => 'disabled']);
            echo $this->Form->input('descripcion', ['disabled' => 'disabled']);
            echo $this->Form->input('contenido');
            echo $this->Form->input('estado', ['type' => 'hidden']);
            
            echo $this->Form->end($guardar);

            ?>
        </div>
        <!-- /.col-lg-12 -->
        
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->