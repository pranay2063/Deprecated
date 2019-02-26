
#include<xc.h>
void init_ADC(void)
{

AD1CON0=0x8001; /* logic of this statement ? */
AD1CON1=0x0000;

}
int main()
{
TRISB=0x0000;
TRISA=0xFFFF;
init_ADC();
while(1)
{
ADGO= 1;                  //### Start an A-to-D Conversion
while(ADGO);               //### Wait for Conversion to Complete
PORTB=ADC1BUF0;
}

return 0;

}

