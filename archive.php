<?php
/** 
 * archives
 *  
 * @author      熊猫小A
 * @version     2019-01-17 0.1
 * 
*/ 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>

<?php 
if(!Utils::isPjax()){
    $this->need('includes/head.php');
    $this->need('includes/header.php');
} 
?>

<?php $this->need('includes/archives.php'); ?>

<?php 
if(!Utils::isPjax()){
    $this->need('includes/footer.php');
} 
?>