tellerDominique = 0
tellerZacharia = 0
while True:
    naam = input("Op wie wil je stemmen? ")
    print(naam)
    if (naam =="Dominique"):
        tellerDominique = tellerDominique +1
        print (tellerDominique)
    elif (naam == "Zacharia"):
        tellerZacharia = tellerZacharia +1
        print (tellerZacharia)
    else:
        if (tellerDominique>tellerZacharia):
            print ("Dominique heeft gewonnen!")
            break
        elif (tellerDominique<tellerZacharia):
            print ("Zacheria heeft gewonnen!")
            break
        else:
            print("Dominique en Zacharia hebben een gelijk aantal stemmen")
        break