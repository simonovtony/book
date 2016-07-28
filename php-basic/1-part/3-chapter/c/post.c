#include <stdio.h>
#include <stdlib.h>

void main(void) {
	char *RemoteAddr = getenv("REMOTE_ADDR");
	char *ContentLength = getenv("CONTENT_LENGTH");
	char *QueryString = getenv("QUERY_STRING");
	
	int NumBytes = atoi(ContentLength);
	char *Data = (char *)malloc(NumBytes + 1);
	fread(Data, 1, NumBytes, stdin);
	Data[NumBytes] = 0;
	
	printf("Content-Type: text/html\n\n");
	
	printf("<html><body>");
	printf("<h1>������������. �� ����� � ��� ���!</h1>");
	printf("��� IP-�����: %s<br>", RemoteAddr);
	printf("���������� ������ ������: %d<br>", NumBytes);
	printf("��� ���������, ������� �� �������: %s<br>", Data);
	printf("� ��� ��, ��� �� �������� ����� URL: %s", QueryString);
	printf("</body></html>");
}