<?php ## ���������� ������������.
# ����������, ���������� �������������� �������� �� ���������� 
# �������������� �������. ����� ������� ������ �������������
# ����������� PEAR. ��� ������� ���������� ����������� �
# ����������� � ������, ��������������� ���� �� �����������.
# ����� ����������� ���� ���������� � ��������� ������ 
# ������������ ���������� ������������� � ����� ��.

# ���������� ������������ ������.
require_once "PHP/Autoload.php";
require_once "PEAR/NameScheme.php";

class PEAR_NameScheme_Autoload {
  # static void classAutoloader(string $classname)
  # �������� ��������� ����� � ������ $classname ���
  # ������ include_once. � ������ ������� ���������� false.
  static function classAutoloader($classname) {
    $fname = PEAR_NameScheme::name2path($classname);
    # ���������, ���� �� ����� ����. ���������
    # ��� � ������� ���������� fopen, ������ true
    # (������������ include_path).
    if ($f = @fopen($fname, "r", true)) {
      fclose($f);
      return include_once($fname);
    }
    return false;
  }
}

# ������������ ������� ������������. ����� �������, ���
# ����� ������� ����������� ������� ������, �������� ������.
# ��� ���������, �.�. ���������� ������� call_user_func() 
# ������������ ����� ���������.
PHP_Autoload::register(array("PEAR_NameScheme_Autoload", "classAutoloader"));
?>