<?php ## �������� � �������� ����� ������.
class test {
  # ������� ����������.
  private static $v = 10;

  # ������������� �������.
  public static function pub() { 
    echo "public (v=".self::$v.")<br>"; 
    self::pri("����� ������� ������");
  }
  # ������� �������.
  private static function pri($from) { 
    echo "private $from<br>"; 
  }
}

test::pub();
test::pri("�������");
?>