<footer class="container">
    <div class="row">

        <?php
        if(is_active_sidebar('footer-column-1')){
        dynamic_sidebar('footer-column-1');
        } ?>
        
        <?php
        if(is_active_sidebar('footer-column-2')){
        dynamic_sidebar('footer-column-2');
        } ?>
        
        <?php
        if(is_active_sidebar('footer-column-3')){
        dynamic_sidebar('footer-column-3');
        } ?>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
