<?php ## �������� __autoload().
function __autoload($cls) {
  echo "������ �� �������� ������ $cls<br>";
}
echo NonExisted::$a;
?>