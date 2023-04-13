import random
print("je hebt 10 chips!")
r = random.randint(1, 36)
chips = 10
nummer = input("op welke nummers wil je inzetten?\n ")
while True:
    nummer = input()
    if nummer == "stop":
        chips = chips-1
        print("rien ne va plus")
        print("de uitkomst is "+str(r))
        if nummer == int(r):
            chips = chips+35
            print("je hebt "+str(chips)+" chips!")
        nummer = input("op welke nummers wil je inzetten? ")
        if chips == 0:
            print("GAME OVER")
            break
