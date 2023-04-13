import json

with open('/Users/jjvdw/OneDrive/Bureaublad/bit-academy/python/04-level/Minecraft-0a357b6d-b72a2a6b/gras_blok.json') as f:
    data = json.load(f)

data["block"]["snow"] = True
data["block"]["coordinates"]["y"] += 66
data["block"]["coordinates"]["z"] *= 3

with open("sneeuw_blok.json", 'w') as new_file:
    json.dump(data, new_file)