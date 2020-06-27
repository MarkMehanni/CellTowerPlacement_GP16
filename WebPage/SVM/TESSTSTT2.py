import numpy
from pandas import read_csv
from sklearn.preprocessing import Normalizer

path = 'Celltower_train.csv'
names = ['Radio', 'Cell', 'Lon', 'Lat', 'Nearest_Distance', 'RSCP', 'Traffic', 'Ecno', 'Area coverage','Predict']
x = [names]
for y in path:
    trimed_line = y.strip()
    if y.isdigit():
        x.append(float(y))
dataframe = read_csv (path, names=x)
array = dataframe.values
Data_normalizer = Normalizer(norm= 'l2').fit(array)
Data_normalized = Data_normalizer.transform(array)
numpy.set_printoptions(precision=2)
print ("\nNormalized data:\n", Data_normalized [0:3])
