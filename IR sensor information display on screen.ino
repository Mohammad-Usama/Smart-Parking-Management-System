                                                          #include <Wire.h>
                                                          #include <LiquidCrystal.h>
                                                          #define sensor1 x = 9
                                                          #define sensor2 y = 8
                                                      
                                                          
                                                          int sensor1,sensor2;
                                                          LiquidCrystal lcd(7, 6, 5, 4, 3, 2);
                                                          
                                                          void setup()
                                                          {
                                                                 pinMode(sensor1, INPUT);
                                                                 pinMode(sensor2, INPUT);
                                                                 lcd.begin(16,2);
                                                                 
                                                                 lcd.print("Sensor1:");
                                                               
                                                                 lcd.print("Sensor2:");
                                                          }
                                                          void set1()
                                                          { 
                                                          
                                                        
                                                          
                                                           lcd.print("Detect object!"); 
                                                          
                                                         
                                                          lcd.print("Detect object"); 
                                                          
                                                          }
                                                          void set2()
                                                          { 
                                                          
                                                         
                                                          
                                                          lcd.print("Detect object!"); 
                                                          
                                                        
                                                          
                                                          lcd.print("Not detect"); 
                                                          
                                                          }
                                                          void set3()
                                                          {
                                                          
                                                          
                                                          
                                                          
                                                          lcd.print("Not detect "); 
                                                          
                                                         
                                                          
                                                          lcd.print("Detect object!"); 
                                                          
                                                          }
                                                          void defaul()
                                                          { 
                                                          
                                                        
                                                          
                                                           lcd.print("Not Detect"); 
                                                          
                                                          
                                                          
                                                          lcd.print("Not Detect "); }
                                                          
                                                          void loop()
                                                          {
                                                                 int senread1 = digitalRead(sensor1);
                                                                 int senread2 = digitalRead(sensor2);
                                                          
                                                          if(senread1 == HIGH && senread2 == HIGH )
                                                          {        set1();        }
                                                          else if(senread1 == !HIGH && senread2 == HIGH )
                                                          {        set2();        }
                                                          else if(senread1 == HIGH && senread2 == !HIGH )
                                                          {        set3();        }
                                                          else
                                                          {
                                                          defaul();
                                                          }
                                                          
                                                       
                                                          }
