<?php /* Smarty version 2.6.30, created on 2016-10-20 10:39:59
         compiled from news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'news.tpl', 3, false),array('function', 'cycle', 'news.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array('title' => "Последние новости")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1>Последние новости на <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</h1>
<ul>
    <?php $_from = ($this->_tpl_vars['news']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
        <li style="background: <?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">
            <b><?php echo $this->_tpl_vars['n']['date']; ?>
</b> <?php echo $this->_tpl_vars['n']['text']; ?>

        </li>
    <?php endforeach; endif; unset($_from); ?>
</ul>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>