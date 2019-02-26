PURPOSE :

#include<xc.h>
#define LED1 PORTBbits.RB1
#define LED2 PORTBbits.RB2
#define low 0
#define high 1
void delay();
void function_ADC(void)
{
   AD1CON1=0b10000010;
   AD1CON2=0b00000000;
}
unsigned int convert();
void indicator()
{
TRISB=0x0000;
function_ADC();
while(1)
{
 unsigned int b;
 b= convert();
if (b>0 && b<204)
{
  LED1 = high;
  LED2 = low;
  delay();
 }
else if (b>205 && b<409)
 {
    LED2 = high;
    LED1 = low;
    delay();
 }
else
{
  LED1 =low;
  LED2 = low;
  delay();
 }
}
}
unsigned int convert()
{
 unsigned int result;
 AD1CHSbits.CH0SB0=0;
 AD1CHSbits.CH0SB1=0;
 AD1CHSbits.CH0SB2=0;
 /*ADCON0bits.CHS0 =0;
 ADCON0bits.CHS1 =0;
 ADCON0bits.CHS2 =0;*/
delay();
while(1)
{
  result = ADC1BUF0;
// a = (ADRESH<<8) + ADRESL ;
return(result);
}
} 

