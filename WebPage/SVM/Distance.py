from math import cos,sin ,acos ,   asin, sqrt , radians
import cmath
lat1 = 8.145062724
lon1 = 47.27394313

lat2 = 8.651167598
lon2 = 47.38750901

a =acos(cos(radians(90-lat1)) *cos(radians(90-lat2)) +sin(radians(90-lat1)) *sin(radians(90-lat2)) *cos(radians(lon1-lon2))) *6371
print (a)

#
# def distance(lat1, lon1, lat2, lon2):
#     p = 0.017453292519943295
#
#     var = 12742 * asin(sqrt(a))
#     print(12742 * asin(sqrt(a)))
#     return var
#
# def closest(data, v):
#     return min(data, key=lambda p: distance(v['lat'],v['lon'],p['lat'],p['lon']))
#
# tempDataList = [{'lat': lat1, 'lon': lon1},
#                 # {'lat': lat2 ,  'lon': lon2 },
#                 # {'lat': 39.7622292, 'lon': -86.1578917}
#                 ]
#
# v = {'lat': lat2, 'lon':lon2}
# print(closest(tempDataList, v))