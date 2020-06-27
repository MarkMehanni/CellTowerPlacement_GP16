# load the iris dataset
import pandas as pd
from sklearn.datasets import load_iris
from sklearn.model_selection import train_test_split
from sklearn.naive_bayes import GaussianNB
from sklearn import metrics

Dataset = pd.read_csv('Location-LTE-CellTowers.csv' )
# print(Dataset.head(1000) , "hello " ,Dataset.tail(1000))


X = Dataset.drop(axis=0, columns=['Cell_ID', 'Longitude' , 'Latitude' , 'Predict'])
Y = Dataset.Predict
print ('X ', X.head(50))
print ('Y' , Y.head(50))

# splitting X and y into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.3, random_state=1)

# training the model on training set
gnb = GaussianNB()
gnb.fit(X_train, y_train)

# making predictions on the testing set
y_pred = gnb.predict(X_test)

# comparing actual response values (y_test) with predicted response values (y_pred)
print("Gaussian Naive Bayes model accuracy(in %):", metrics.accuracy_score(y_test, y_pred)*100)

new_input = [[61 , 465 , 879 ,4]]
# get prediction for new input
new_output = gnb.predict(new_input)
print(new_input, new_output)