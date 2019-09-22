<?php header('Location:/index.html'); ?>

<?php
if (isset( $_REQUEST) && !empty($_REQUEST)){
    if (
        isset( $_REQUEST['exampleFormControlInput1'], $_REQUEST['exampleFormControlTextarea1'], 
        $_REQUEST['exampleFormControlFile1'])&&
        !empty( $_REQUEST['exampleFormControlInput1']) &&
        !empty($_REQUEST['exampleFormControlTextarea1'])
    ){
        $messsage = wordwrap($_REQUEST['exampleFormControlTextarea1'], 70);
        $to = $_REQUEST['exampleFormControlInput1']. '@'. $_REQUEST['exampleFormControlFile1'];
        $result = @mail($to,'',$messsage);
    }else{
        print 'Not all information was submitted';
    }
}
?>