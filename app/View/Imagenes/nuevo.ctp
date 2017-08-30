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
            <input id="upload" name="upload[]" type="file" multiple class="file-loading">

            <?php
            echo $this->Form->input('estado', ['type' => 'hidden', 'value' => 1]);
            echo $this->Form->end();
            ?>
        </div>

    </div>
    <!-- /.row -->




</div>
<!-- /.container-fluid -->