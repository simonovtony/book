#include <stdio.h> 

long filesize(FILE *f) { 
  long pos, size;
  pos = ftell(f); 
  fseek(f, 0, 2); 
  size = ftell(f); 
  fseek(f, pos, 0); 
  return size; 
} 

void main(void) {
  FILE *f = fopen("test.gif", "rb");
  FILE *st = fdopen(fileno(stdout), "wb");
  fprintf(st, "Pragma: no-cache\r\n");
  fprintf(st, "Content-type: image/gif\r\n");
  fprintf(st, "Content-length: %d\r\n", filesize(f));
  fprintf(st, "\r\n");
  while (1) {
    char s[4000+1];
    int size = fread(s, 1, 4000, f);
    if (!size) break;
    fwrite(s, size, 1, st);
  }
}
