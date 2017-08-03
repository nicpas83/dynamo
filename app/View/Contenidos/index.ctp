<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $var['titulo'] ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <?php
    echo $this->Html->link($var['linkBtn'], array('action' => 'index', $var['estado']), array('class' => 'btn btn-primary btn-sm'));
    ?>
    <br/>
    <div class="table-responsive">
        <table id="contenidos" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Sección</th>
                    <th>Descripción</th>
                    <th>Contenido</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($landing as $land) {
                    //debug($var); die;
                    ?>
                    <tr>
                        <td><?php echo $land['Contenido']['orden']; ?></td>
                        <td><?php echo $land['Contenido']['seccion']; ?></td>
                        <td><?php echo $land['Contenido']['descripcion']; ?></td>
                        <td><?php echo $land['Contenido']['contenido']; ?></td>
                        <td><?php echo $land['Contenido']['estado']; ?></td>
                        <td>
                            <?php
                            if (isset($var['accion']['activar'])) {
                                echo $this->Html->link('', array('action' => 'activar', $land['Contenido']['id']), array('title' => 'Activar', 'class' => $var['accion']['activar']));
                            }
                            if (isset($var['accion']['historial'])) {
                                echo $this->Html->link('', array('action' => 'historial', $land['Contenido']['id']), array('title' => 'Historial', 'class' => $var['accion']['historial']));
                            }
                            if (isset($var['accion']['eliminar'])) {
                                echo $this->Form->postLink('', array('action' => 'eliminar', $land['Contenido']['id']), array('confirm' => 'Estás seguro?', 'title' => 'Eliminar', 'class' => $var['accion']['eliminar']));
                            }
                            echo $this->Html->link('', array('action' => 'editar', $land['Contenido']['id']), array('title' => 'Editar', 'class' => $var['accion']['editar']));
                            ?> 
                        </td>
                    </tr>
    <?php
}  //class="btn btn-primary btn-xs fa fa-edit pull-right"
?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->