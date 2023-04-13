import rewards
common = 0 
rare = 0
epic = 0
legendary = 0
for x in range (5):
    rarity = rewards.get_new_skin()
    if rarity == "COMMON":
        common = common+1
    elif rarity == "RARE":
        rare = rare+1
    elif rarity == "EPIC":
        epic = epic+1
    else:
        legendary += 1
if common > 0:
    print(f"{common} x common")
if rare > 0:
    print(f"{rare} x rare")
if epic > 0:
    print(f"{epic} x epic")
if legendary > 0:
    print(f"{legendary} x legendary")