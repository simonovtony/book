#include <stdio.h>
#include <stdlib.h>
#include "urldecode.c"

void main(void) {
    char *RemoteAddr = getenv("REMOTE_ADDR");
    char *ContentLength = getenv("CONTENT_LENGTH");
    char *QueryString = malloc(strlen(getenv("QUERY_STRING")) + 1);
    strcpy(QueryString, getenv("QUERY_STRING"));
    UrlDecode(QueryString);
    int NumBytes = atoi(ContentLength);
    char *Data = (char*)malloc(NumBytes + 1);
    fread(Data, 1, NumBytes, stdin);
    Data[NumBytes] = 0;
    UrlDecode(Data);
    printf("Content-type: text/html\n\n");
    printf("<html><body>");
    printf("<h1>Здравствуйте. Мы знаем о Вас все!</h1>");
    printf("Ваш IP-адрес: %s<br>",RemoteAddr);
    printf("Количество байтов данных: %d<br>", NumBytes);
    printf("Вот параметры, которые Вы указали: %s<br>",Data);
    printf("А вот то, что мы получили через URL: %s", QueryString);
    printf("</body></html>");
}
