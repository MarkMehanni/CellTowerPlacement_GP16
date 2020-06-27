msg = "Hello World"
print(msg)

import pandas as pd
from sklearn import svm
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn import preprocessing
import eel


import sys
x = sys.argv[1]
y = sys.argv[2]
z = sys.argv[3]

print( x , y , z)

Dataset = pd.read_csv('Celltower_train.csv', sep=',',header=0)

X = np.array(Dataset.drop(axis=0, columns=['Radio', 'Cell' , 'Lon' ,'Lat' ,'Area coverage', 'Predict']))
Y = np.array(Dataset['Predict'])

X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.2, random_state=0)


SVM = svm.SVC(decision_function_shape="ovo").fit(X, Y)
SVM.predict(X_test)
round(SVM.score(X_test, y_test), 4)

print('SVM:',SVM.score(X_test, y_test))
new_input = [[80.852 , -60, 77700000, -10 ]]
new_output = SVM.predict(new_input)
print(new_output)

# # new_input2 = [[880.3652 ,  ]]
# # new_output2 = SVM.predict(new_input2)
# # print(new_output2 + "ooutput 2 ")