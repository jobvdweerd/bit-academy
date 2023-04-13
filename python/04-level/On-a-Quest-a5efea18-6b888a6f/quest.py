bezittingen = {
    'goud' : 500,
    'buidel' : ['touw', 'vuursteen', 'zakmes'],
    'rugzak' : ['panfluit', 'dolk', 'slaapzak','appel']
}
bezittingen['zilver'] = 12
bezittingen['rugzak'].sort()
del bezittingen['buidel'][2]
print(bezittingen)
