<!DOCTYPE html>
<html lang="en">
    <head>

    <?php echo $this->element('head') ?>

    </head>

    <body data-spy="scroll" data-target="#main-nav-collapse" data-offset="100">
        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>

        <?php echo $this->element('header') ?>
                
        <?php echo $this->fetch('content') ?>
        
        <?php echo $this->element('footer') ?>


    </body>
</html>