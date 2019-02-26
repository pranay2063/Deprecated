#include<xc.h>
int main()
{

int i;
TRISB=0x0000;

while(1)
{

PORTB=0xFFFF;

for(i=1;i>0;i++);
PORTB=0x0000;

for( i=1; i>0;i++);
}

return 0;

}

 
