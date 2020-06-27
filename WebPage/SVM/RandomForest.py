import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score

Dataset = pd.read_csv('Location-LTE-CellTowers.csv')

# print(Dataset.head(1000) , "hello " ,Dataset.tail(1000))
X = Dataset.drop(axis=0, columns=['Cell_ID', 'Longitude' , 'Latitude' ,'Area-Coverage' , 'Range', 'Predict'])
y = Dataset.Predict
# print(X.tail(50))

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=3)

sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)

Classifier = RandomForestClassifier(n_estimators=20, random_state=0).fit(X, y)
Classifier.fit(X_train, y_train)
y_pred = Classifier.predict(X_test)
round(Classifier.score(X_test, y_test), 4)

print(confusion_matrix(y_test,y_pred))
print(classification_report(y_test,y_pred))
print(accuracy_score(y_test, y_pred))

new_input = [[69  ,4 ]]
# get prediction for new input
new_output = Classifier.predict(new_input)
print(new_input, new_output)
