#include <time.h>
#include <stdio.h>
#include <stdlib.h>

void main(void) {
	int Num;
	time_t t;
	
	srand(time(&t));
	Num = rand() % 10;
	printf("Content-type: text/html\n");
	printf("Pragma: no-cache\n");
	printf("\n");
	printf("<html></body>");
	printf("<h1>Здравствуйте!</h1>");
	printf("Случайное число в диапазоне 0-9: %d", Num);
	printf("</body></html>");
}