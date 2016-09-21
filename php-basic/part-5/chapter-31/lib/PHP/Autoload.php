<?php ## ������ PHP_Autoload.
# ���������� ��������� ������������� ������������ �������, ����������
# �������������� ���������� ������ � �������� __autoload() � PHP5.
# � ������� �� ������������� ��������������� __autoload(), �� ������ 
# �������������� ����� ��������� ������������. ������ �������������:
#   require_once "PHP/Autoload.php";
#   ...
#   PHP_Autoload::register("MyAutoloadFunction1");
#   ...
#   PHP_Autoload::register("MyAutoloadFunction2");
# �������-���������� ������ ���������� true � ������, ���� ����� 
# (�� �� ������) �������� � ��������� ����������� � ������ �������
# ����������. ������ false, ��� �������������, ��� ����� �������� 
# ���������� ���������� ����������� � ������.
class PHP_Autoload {
  # ������ �������, ������������ ��� ������� �� autoload.
  static $funcs = array();
  # ������� �� ���������� ������� ���������� __autoload().
  static $ok = true;

  # static void register(FunctionName $func)
  # ������������ ����� ������� � ������ ������������.
  # ��� ������� �� autoload ���������� ��� �����������
  # �� �������, ������� � ����������, �� ��� ���, ����
  # ����� �� ����������. ��������� ���������� � ����������
  # ������ � ����� �� ��������� ��������: 
  # - array(className, staticMethodName)
  # - array($object, methodName)
  # �������-���������� ������ ���������� true � ������,
  # ���� ����� �� �� ������ ��������, � false, ���� �����
  # �������� ���������� ���������� ����������� � ������.
  static function register($func) {
    self::$funcs[] =& $func;
  }

  # static void unregister(FunctionName $func)
  # ������� ������� �� ������ ������������������ ������������.
  static function unregister($func) {
    $f =& self::$funcs;
    for ($i=0; $i<count($f); $i++)
      if ($f[$i] === $func) {
         array_splice($f, $i, 1);
         break;
      }
  }

  # void autoload(string $classname)
  # ���������� � ������ ������� �� autoload (��. ����).
  static function autoload($classname) {
    static $loading = array();
    # � ������, ���� ����� ��� �� ��������, � ����������
    # class_exists(), ���������� ��������� ������ �� autoload,
    # � ��������� �������������. ����� ����� ��������,
    # ���������, ����� ���� � autoload() � ��� �� ������
    # ������ �� ���������� ������.
    if (@$loading[$classname]) return;
    # ���� ��������. � ������, ���� autoload() ����� �������
    # ����������, ��������� ���������� �������.
    $loading[$classname] = true;
    foreach (array_reverse(self::$funcs) as $f) {
      # ��� ����� ���������� ����������� ����� autoload(),
      # ����� ���� ��� �� ��������.
      if (class_exists($classname)) break;
      # �������� ����������. ���� �� ������ false, ������,
      # ��������� �����-�� ������ � ���������� ��������� 
      # ��������� �� ������ ����������.
      if (call_user_func($f, $classname)) break; 
    }
    # �������� ��������.
    $loading[$classname] = false;
  }
}

# ���, ����������� ��� ����������� ����������.
# ������������� ����������� ���������� ���������� 
# �� __autoload, �� ������ � ������, ���� ������
# ����������� ��� �� ���� ����������� ���-�� ���.
if (!function_exists("__autoload")) {
  function __autoload($c) { PHP_Autoload::autoload($c); }
} else {
  PHP_Autoload::$ok = false;
}
?>