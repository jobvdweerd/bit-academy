from datetime import date
jaar = int(input("Wat is het jaar?\n"))
maand = int(input("Wat is het maandnummer?\n"))
dag = int(input("Wat is de dag?\n"))
d0 = date(jaar, maand, dag)
d1 = date.today()
delta = d1 - d0
print(delta.days)
