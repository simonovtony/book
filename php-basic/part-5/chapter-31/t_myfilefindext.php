<?php ## ������������ �������.
require_once "lib/config.php";
# �� ������, ���� � ��� �� ���������� PEAR, ���������� PEAR-������,
# �������� � ���� ����� (� ������ ������ PEAR � File_Find).
require_once "lib-pear/config.php";
require_once "MyFileFindExt.php";
echo "<pre>";
print_r(MyFileFindExt::readdir("/")); # ���������� ���������� ����������
print_r(MyFileFindExt::readcurdir()); # ������ ��� ������ ����� �� ����
?>
