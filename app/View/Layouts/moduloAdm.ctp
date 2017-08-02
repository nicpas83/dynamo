<!DOCTYPE html>
<html lang="en">

    <head>
        <?php echo $this->element('head_adm') ?>
        <script type="text/javascript">var baseUrl = '<?php echo $this->Html->url('/'); ?>';</script>
    </head>

    <body>

        <div id="wrapper">
            <?php echo $this->element('header_adm') ?>

            <div id="page-wrapper">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content') ?>
            </div>
            <!-- /#page-wrapper -->    

        </div>
        <!-- /#wrapper -->

        <?php echo $this->element('footer_adm') ?>

        <?php
//            debug($this->params['controller']); die;

        if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . '.js')) {
            echo $this->Html->script($this->params['controller']);
        }
        if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . DS . $this->params['action'] . '.js')) {
            echo $this->Html->script($this->params['controller'] . '/' . $this->params['action']);
        }
        ?>

    </body>
</html>