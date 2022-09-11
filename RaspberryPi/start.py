
from gpiozero import LightSensor, Buzzer
from time import sleep

ldr1 = LightSensor(17)
ldr2 = LightSensor(27)

lght1 = Buzzer(26)
lght2 = Buzzer(19)
lght3 = Buzzer(13)
lght4 = Buzzer(6)

ctr = 0
lght1.off()
lght2.off()
lght3.off()
lght4.off()

c = open("counter.txt", "w+")
b1 = open("bulb1.txt", "w+")
b2 = open("bulb2.txt", "w+")
b3 = open("bulb3.txt", "w+")
b4 = open("bulb4.txt", "w+")
c.write('%d' % ctr)
print(ctr)

while(ctr>=0):
    sleep(3)
    while(True):
        sleep(0.1)
        if(ldr1.value < 0.5):
            ctr = ctr + 1
            break
        elif(ldr2.value < 0.5):
            ctr = ctr - 1
            break
        else:
            continue
    if(ctr!=(-1)):
        c.write('%d' % ctr)
        print(ctr)
    if(ctr>0):
        lght1.on()
        l1.write("on")
        lght1.on()
        l2.write("on")
        lght2.on()
        l3.write("on")
        lght3.on()
        l4.write("on")
        lght4.on()
    else:
        l1.write("off")
        lght1.off()
        l2.write("off")
        lght2.off()
        l3.write("off")
        lght3.off()
        l4.write("off")
        lght4.off()
c.close()
b1.close()
b2.close()
b3.close()
b4.close()
b5.close()
