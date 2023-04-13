import string
from sys import getallocatedblocks

i = 1
getal = input("van welk getal wil je de faculteit weten? ")
antwoord = int(getal)
while i < int(getal):
    antwoord = antwoord*(int(getal) - i)
    i+=1

print("de faculteit van " + str(getal) + " is " + str(antwoord))
