<?php ## ������ ��������� ����� �������.
class script {
  # �������� ������� ���������. ����������� ��� ������ �������.
  static function main() {
    $start = self::microtime();
    sleep(1);
    echo "�������� test: ".@$_REQUEST['test'];
    $end = self::microtime();
    echo "<hr>��������� �������� ".sprintf("%.2f", $end-$start)." �";
  }

  # double microtime()
  # ���������� ������� ����� � �������� � ���� ��������������� 
  # ����� (� ������ �������). �������� ����������� microtime(),
  # ������������ ������, � ������� �� ����� ������ ��������.
  private static function microtime() {
    $t = explode(" ", microtime());
    return $t[0]+$t[1];
  }
}

if (!defined("DONT_CALL_MAIN")) script::main();
?>