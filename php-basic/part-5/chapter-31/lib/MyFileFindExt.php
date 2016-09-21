<?php ## ����������� ������.
require_once "MyFileFind.php";

class MyFileFindExt extends MyFileFind {
  # �������������� ��������� �������.
  public function readdir($dir) {
    echo "readdir($dir) called\n";
    # �������� �������� ������� �� MyFileFind.
    return parent::readdir($dir);
  }
  # ����� �������.
  public function readcurdir() {
    return self::readdir(".");
  }
}

# �������� ��������������� ��������� (��� �������).
echo "File ".__FILE__." loaded.\n";
?>