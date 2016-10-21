<?php /* Smarty version 2.6.30, created on 2016-10-21 09:53:12
         compiled from example.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'example.tpl', 11, false),array('function', 'cycle', 'example.tpl', 75, false),)), $this); ?>
<!-- variable -->
<?php echo $this->_tpl_vars['bool']; ?>
<br>
<?php echo $this->_tpl_vars['int']; ?>
<br>
<?php echo $this->_tpl_vars['float']; ?>
<br>
<?php echo $this->_tpl_vars['string']; ?>
<br>
<?php echo $this->_tpl_vars['array']['0']; ?>
 <br>
<?php echo $this->_tpl_vars['object']->string; ?>
<br>
<hr>

<!-- modifier -->
<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>

<hr>

<!-- foreach -->
<table>
    <?php $_from = ($this->_tpl_vars['array']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['k']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']; ?>
</td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>
<hr>

<!-- if else -->
<?php if ($this->_tpl_vars['int'] == 123): ?>
    true
<?php else: ?>
    false
<?php endif; ?>
<br>

<!--
== eq   != ne
>  gt   <  lt
>= ge   <= le
-->

<?php if ($this->_tpl_vars['int'] == 123): ?>
    true
<?php else: ?>
    false
<?php endif; ?>
<hr>

<!-- include -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "example2.tpl", 'smarty_include_vars' => array('title' => 'test')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<hr>

<!-- strip (убирает все пробелы и переносы строк как </span><span>)-->
<?php echo '<span>test</span><span>123</span>'; ?>

<hr>

<!-- assign -->
<?php $this->assign('string', 'test123'); ?>
<?php echo $this->_tpl_vars['string']; ?>

<hr>

<!-- capture -->
<?php ob_start(); ?>
    <?php echo 'Последние новости на '; ?><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?><?php echo ''; ?>

<?php $this->_smarty_vars['capture']['ttl'] = ob_get_contents(); ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "example3.tpl", 'smarty_include_vars' => array('title' => $this->_smarty_vars['capture']['ttl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1><?php echo $this->_smarty_vars['capture']['ttl']; ?>
</h1>
<hr>

<!-- cycle -->
<table width="100%">
    <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#DDDDDD,#CCCCCC"), $this);?>
">
        <td>Первая строка.</td>
    </tr>
    <tr bgcolor="<?php echo smarty_function_cycle(array(), $this);?>
">
        <td>Вторая строка.</td>
    </tr>
    <tr bgcolor="<?php echo smarty_function_cycle(array(), $this);?>
">
        <td>Третья строка.</td>
    </tr>
</table>