<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Subir Imágenes</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br/> 

    <div class="row">
        <div class="col-lg-12">
            <?php
            echo $this->Form->create($horizontal);
            echo $this->Form->input('categoria', ['type' => 'select', 'options' => $combo_categorias]);
            ?>

            <label class = "control-label">Select File</label>
            <input id="input-41" name="input41[]" type="file" multiple class="file-loading">

            <?php
            echo $this->Form->end();
            ?>
        </div>

    </div>
    <!-- /.row -->




</div>
<!-- /.container-fluid -->