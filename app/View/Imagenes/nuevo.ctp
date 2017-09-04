<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Subir Imágenes</h2>
            <h4>Seleccione una categoría.</h4>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br/> 

    <div class="row">
        <div class="col-lg-12">
            <?php            
            $horizontal['type'] = 'file';
            echo $this->Form->create($horizontal);
            echo $this->Form->input('categoria', ['type' => 'select', 'options' => $combo_categorias, 'label' => false]);
            
            echo $this->Form->input('files. ', ['type' => 'file', 'class' => 'file-loading', 'id' => 'upload', 'multiple' => 'multiple', 'label' => false]);
            
            echo $this->Form->input('estado', ['type' => 'hidden', 'value' => 1]);
            echo $this->Form->end();
            ?>
        </div>

    </div>
    <!-- /.row -->




</div>
<!-- /.container-fluid -->