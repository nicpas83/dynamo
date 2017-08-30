<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><?php echo $configView['titulo'] ?></h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="actionBtn">
        <?php
        echo $this->Html->link('Subir Imágenes', array('action' => 'nuevo'), array('class' => 'btn btn-primary btn-sm'));
        echo $this->Html->link('Ver Inactivas', array('action' => 'index', $configView['estado']), array('class' => 'btn btn-primary btn-sm'));
        ?>   
    </div>
    <br/>
    
<div class="row">
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
    

</div>
<!-- /.container-fluid -->