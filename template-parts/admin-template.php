<?php if (current_user_can('administrator')) : ?>
    <div class="wp-template">
    
        <?php
        global $template;
        // echo basename($template);
        ?>
        <p>Template File:&nbsp;<strong><?php echo basename($template); ?></strong></p>
    </div>
    <style>
    	.wp-template{
    		position:absolute;
    		background:rgba(0,0,0,.2);
    		right:10px;
    		bottom:10px;
    		padding:20px 30px;
    		line-height: 1;
    	}
		.wp-template p{
			margin-bottom: 0;
		}
    </style>
<?php endif; ?>