import numpy as np
import pandas as pd
import csv
import os
from sklearn.tree import DecisionTreeClassifier
from sklearn.preprocessing import LabelEncoder
from sklearn.preprocessing import OneHotEncoder
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import train_test_split
from sklearn.metrics import r2_score
from sklearn.metrics import average_precision_score
from sklearn.metrics import precision_recall_curve
from sklearn.metrics import multilabel_confusion_matrix
from sklearn.metrics import classification_report
from sklearn.metrics import confusion_matrix
from sklearn.metrics import precision_score
from sklearn.metrics import recall_score
from sklearn.metrics import f1_score
from sklearn.metrics import accuracy_score


data = pd.read_csv(r'C:\Users\Mark\Downloads\parks-special-events-1.csv')
data.head()

x=data.iloc[0:640,[11]].values
y=data.iloc[0:640,12].values

X_train,X_test,y_train,y_test=train_test_split(x,y,test_size=0.2,random_state=0)
clf = DecisionTreeClassifier()
clf = clf.fit(X_train,y_train)
y_predict = clf.predict(X_test)

y_predict


print(confusion_matrix(y_test, y_predict))
print(classification_report(y_test, y_predict))

