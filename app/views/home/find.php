<?php $this->setSiteTitle(SITE_TITLE); ?>
<?php $this->start('head'); ?>
<!-- content in head here! -->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<?php
$db = DB::getInstance();
//$data = $db->find('test', [
//   'conditions' => "full_name =?",
//  'bind' => ['John Woo']
//]);
$data = $db->find('test',[]);
dnd($data);
//foreach ($data as $v){
//    echo $v->full_name;
//}
?>

<?php $this->end(); ?>
