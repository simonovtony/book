#include <stdio.h>
#include <stdlib.h>

void main(void) {
	char *RemoteAddr = getenv("REMOTE_ADDR");
	char *QueryString = getenv("QUERY_STRING");
	printf("Content-type: text/html\n\n");
	printf("<html><body>");
	printf("<h1>������������. �� ����� � ��� ���!</h1>");
	printf("��� IP-�����: %s<br>", RemoteAddr);
	printf("��� ���������, ������� �� �������: %s", QueryString);
	printf("</body></html>");
}