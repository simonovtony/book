#include <stdio.h>
#include <stdlib.h>

void main(void) {
	char *RemoteAddr = getenv("REMOTE_ADDR");
	char *QueryString = getenv("QUERY_STRING");
	printf("Content-type: text/html\n\n");
	printf("<html><body>");
	printf("<h1>Здравствуйте. Мы знаем о Вас все!</h1>");
	printf("Ваш IP-адрес: %s<br>", RemoteAddr);
	printf("Вот параметры, которые Вы указали: %s", QueryString);
	printf("</body></html>");
}