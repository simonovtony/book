<?php

class InsensitiveArray implements ArrayAccess {

    private $a = array();

    public function offsetExists($offset) {
        $offset = strtolower($offset);
        $this->log("offsetExists('$offset')");
        return isset($this->a[$offset]);
    }

    public function offsetGet($offset) {
        $offset = strtolower($offset);
        $this->log("offsetGet('$offset')");
        return $this->a[$offset];
    }

    public function offsetSet($offset, $data) {
        $offset = strtolower($offset);
        $this->log("offsetSet('$offset', '$data')");
        $this->a[$offset] = $data;
    }

    public function offsetUnset($offset) {
        $offset = strtolower($offset);
        $this->log("offsetUnset('$offset')");
        unset($this->a[$offset]);
    }

    public function log($str) {
        echo "$str<br>";
    }
}

$a = new InsensitiveArray();
$a->log("## Устанавливаем значение (оператор =).");
$a['php'] = 'There is more than one way to do it.';
$a['pHp'] = 'Это значение должно перезаписываться поверх предыдущего.';
$a->log("## Получаем значение элемента (оператор []).");
$a->log("<b>значение:</b> '{$a['PHP']}'");
$a->log("## Проверяем существование элемента (оператор isset()).");
$a->log("<b>exists:</b> " . (isset($a['Php']) ? "true" : "false"));
$a->log("## Уничтожаем элемент (оператор unset()).");
unset($a['phP']);

?>