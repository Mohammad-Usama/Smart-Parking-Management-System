#define led D5

#define sen D1

int val = 0; 
void setup() 
{ 
   pinMode(D5, OUTPUT);
   pinMode(D1, INPUT); 
} 
void loop()
{ 
   val = digitalRead(D1); 
   if (val == HIGH)
   { 
      digitalWrite(D5, LOW);    
   } 
   else 
   { 
      digitalWrite(D5, HIGH); 
   } 
}
