<?php ## ������ ������������� ������� ��� ������������.
require_once "lib/config.php";
# �� ������, ���� � ��� �� ���������� PEAR, ���������� PEAR-������,
# �������� � ���� ����� (� ������ ������ PEAR � File_Find).
require_once "lib-pear/config.php";
require_once "PEAR/NameScheme/Autoload.php";
# ������� � ����� ������� ������ ������������ �������������.
echo "<pre>����� � ������� ����������:\n";
# ��� ������ - ���������� ���������� ������ ������ MyFileFind.
print_r(MyFileFind::readdir("."));
?>