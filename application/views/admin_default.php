<?php
if(empty($head) == TRUE) {
    $this->load->view('admin/header_view');
} else {
    $this->load->view('admin/header_view', $head);
}
?>
<div class="wrapper row-offcanvas row-offcanvas-left">

<?php
if(empty($left) == TRUE) {
    $this->load->view('admin/left_view');
} else {
    $this->load->view('admin/left_view', $left);
}
?>

<?php if($this->session->flashdata('message_flashdata')) : ?>
<div style="font-size: 20px;" align="center"><?=$this->session->flashdata('message_flashdata')?></div>
<?php endif; ?>

<?php
$module = $this->router->fetch_module();
$this->load->view($module . '/' . $this->config->item('layout_load_mod'), $content);
?>
</div>
<?php
if(empty($footer) == TRUE) {
    $this->load->view('admin/' . $this->config->item('layout_load_footer'));
} else {
    $this->load->view('admin/' . $this->config->item('layout_load_footer'), $footer);
}
?>