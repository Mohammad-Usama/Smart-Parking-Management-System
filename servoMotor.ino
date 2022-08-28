#include <Servo.h>             //Servo library
 
Servo servo_test;        //initialize a servo object for the connected servo  
     #define m D3             
int angle = 0;  

 
void setup() 
{ 
  servo_test.attach(D3);      
} 
  
void loop() 
{ 
  for(angle = 0; angle < 360; angle += 5)    
  {                                  
    servo_test.write(angle);                
                          
  } 
 
  
  for(angle = 180; angle>=1; angle-=5)     // command to move from 180 degrees to 0 degrees 
  {                                
    servo_test.write(angle);              //command to rotate the servo to the specified angle
                        
  } 

   
}
