<?php ## ������ ������������� ����������.
require_once "lib/config.php";
# �� ������, ���� � ��� �� ���������� PEAR, ���������� PEAR-������,
# �������� � ���� ����� (� ������ ������ PEAR � File_Find).
require_once "lib-pear/config.php";
require_once "MyFileFind.php";
echo "<pre>���������� ��������� ��������:\n";
print_r(MyFileFind::readdir("/")); # ���������� ���������� ����������
print_r(MyFileFind::readdir("/")); # ������ ��� ������ ����� �� ����
echo "��� ��� � ����� ��������� � ���� ������:\n";
print_r(MyFileFind::$cache);       # ������� ���������� ����
?>