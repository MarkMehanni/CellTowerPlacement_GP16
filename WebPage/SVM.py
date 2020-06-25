import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
import StandardScaler as scalar
def  Predict(input):
	Dataset = pd.read_csv('Celltower_train-412alf.csv', sep=',',header=0)

	X = Dataset.drop(axis=0, columns=['Radio', 'Cell' , 'Lon' ,'Lat' ,'RSCP','Ecno','Area coverage', 'Predict'])
	Y = Dataset['Predict']
	
	X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.30, random_state=1)
  
	
	SVM = SVC(decision_function_shape="ovo").
	SVM.fit(X_train, y_train)
	
	return SVM.predict(input)
	

