import RPi.GPIO as GPIO 

import time 

espera = 1 
pin = 10 

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(pin,GPIO.OUT) 

i = 1 

while i <= 2: 
    GPIO.output(pin,GPIO.HIGH)
    time.sleep(espera) 
    GPIO.output(pin,GPIO.LOW) 
    time.sleep(espera)
    print("Hello World"," ",i) 
    i = i+1 
