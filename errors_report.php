<?php if(count($errors_report)>0): ?>
    <div class="error" style="border: 2px solid red;
    margin-left: 5%;
    border-radius: 6px;
    display:block">
        <?php foreach($errors_report as $error): ?>
        <b><?php echo $error; ?><br></b>
        
        <?php endforeach ?>
    </div>


    <?php endif ?>
