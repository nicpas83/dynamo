<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $configView['titulo'] ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <?php
    echo $this->Html->link($configView['linkBtn'], array('action' => 'index', 1), array('class' => 'btn btn-primary btn-sm'));
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
                    ?>
                    <tr>
                        <td><?php echo $land['Contenido']['orden']; ?></td>
                        <td><?php echo $land['Contenido']['seccion']; ?></td>
                        <td><?php echo $land['Contenido']['descripcion']; ?></td>
                        <td><?php echo $land['Contenido']['contenido']; ?></td>
                        <td><?php echo $land['Contenido']['str_estado']; ?></td>
                        <td>
                            <?php
                            if (isset($configView['accion']['activar']) && $land['Contenido']['str_estado'] == 'Inactivo') {
                                echo $this->Html->link('', array('action' => 'activar', $land['Contenido']['id']), array('title' => 'Activar', 'class' => $configView['accion']['activar']));
                            }
                            if (isset($configView['accion']['historial'])) {
                                echo $this->Html->link('', array('action' => 'historial', $land['Contenido']['orden']), array('title' => 'Historial', 'class' => $configView['accion']['historial']));
                            }
                            if (isset($configView['accion']['eliminar']) && $land['Contenido']['str_estado'] == 'Inactivo') {
                                echo $this->Form->postLink('', array('action' => 'eliminar', $land['Contenido']['id']), array('confirm' => 'Estás seguro?', 'title' => 'Eliminar', 'class' => $configView['accion']['eliminar']));
                            }
                            echo $this->Html->link('', array('action' => 'editar', $land['Contenido']['id']), array('title' => 'Editar', 'class' => $configView['accion']['editar']));
                            ?> 
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->