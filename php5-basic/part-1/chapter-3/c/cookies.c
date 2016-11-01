#include <stdio.h>
#include <stdlib.h>

void main() {
	char Buf[1000];
	char *Cook = getenv("HTTP_COOKIE");
	Cook += 5; 
	char *Query = getenv("QUERY_STRING");
	if(strcmp(Query, "")) {
		strcpy(Buf, Query + 5);
		printf("Set-cookie: cook=%s; "
			   "expires=Friday,31-Dec-01 23:59:59 GMT", Buf); 
		Cook=Buf;
	}
	printf("Content-type: text/html\n\n");
	printf("<html><body>\n");
	if(strcmp(Cook, ""))
		printf("<h1>Привет, %s!</h1>\n",Cook);
	printf("<form action=/cgi-bin/script.cgi method=get>\n");
	printf("Ваше имя: ");
	printf("<input type=text name=name value='%s'>\n",Cook);
	printf("<input type=submit value='Отправить'>\n");
	printf("</form>\n");
	printf("</body></html>");
}
