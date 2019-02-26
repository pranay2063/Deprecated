/*
 * File:   switch.c
 * Author: PRANAY
 *
 * Created on 18 July, 2014, 1:20 AM
 */


#include "xc.h"
#define HIGH 1
#define LOW  0
#define INPUT0 PORTAbits.RA0
#define INPUT1 PORTAbits.RA1
#define INPUT2 PORTAbits.RA2
#define LED0   PORTBbits.RB0
#define LED1   PORTBbits.RB1
#define LED2   PORTBbits.RB2

int main(void)
{

    TRISA=0xFFFF;
    TRISB=0x0000;

    if(INPUT0==HIGH)
    LED0=HIGH;

    if(INPUT1==HIGH)
    LED1=HIGH;

    if(INPUT2==HIGH)
    LED2=HIGH;

    return 0;
    
}
