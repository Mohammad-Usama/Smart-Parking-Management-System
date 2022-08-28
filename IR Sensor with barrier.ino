#include<Servo.h>

#define sensor D2;

Servo servo_motor;

int val =0;



void setup() {

  servo_motor.attach(D3);

  pinMode(D2, INPUT);
  
  

}

void loop() {
pinMode(D3, OUTPUT);
  val = digitalRead(D2);
  if(val==LOW)
  {
  for(int angle = 0; angle < 180; angle += 1)    
  {                                  
    servo_motor.write(angle);                
                          
  } 
  }
}
