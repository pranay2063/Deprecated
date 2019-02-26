/*
 * File:   seven segment.c
 * Author: MANITIAN
 *
 * Created on 18 July, 2014, 12:35 AM
 */


#include "xc.h"
#define HIGH 1
#define LOW  0
#define INPUT PORTbits.RA0

void counter(int a)
{
          switch(a)
          {
              case 0: PORTB=0x0000000000111111; break;
              case 1: PORTB=0x0000000000000110; break;
              case 2: PORTB=0x0000000001011011; break;
              case 3: PORTB=0x0000000001001111; break;
              case 4: PORTB=0x0000000001100110; break;
              case 5: PORTB=0x0000000001101101; break;
              case 6: PORTB=0x0000000001111101; break;
              case 7: PORTB=0x0000000000000111; break;
              case 8: PORTB=0x0000000001111111; break;
              case 9: PORTB=0x0000000001101111; break;

          }
          
}

int main() 
{

    int i;
    TRISA=0xFFFF;
    TRISB=0x0000;
    if(INPUT==HIGH)
    {

        for(i=0;i<10;i++)
        counter(i);

    }

    else {
           for(i=9;i>=0;i--)
           counter(i);
         }
    return 0;

}
