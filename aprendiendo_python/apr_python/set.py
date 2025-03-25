mi_set = {1, 2, 3, 4, 5}
otro_set = set([2, 4, 6, 8, 10])

set1 = {1, 2, 3, 4, 5}
set2 = {4, 5, 6, 7, 8}

set1.add(6)
set2.remove(7)

union = set1.union(set2) # {1, 2, 3, 4, 5, 6, 8}
interseccion = set1.intersection(set2) # {4, 5, 6}
diferencia = set1.difference(set2) # {1, 2, 3}

print(union)
print(interseccion)
print(diferencia)
