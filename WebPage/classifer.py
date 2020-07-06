#!C:\xampp\htdocs\CellTowerPlacement_GP16\WebPage\classifer.py python3
import mysql.connector
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC

mydb = mysql.connector.connect(host="localhost",user="root" ,passwd="" , database="demo")
mycursor =mydb.cursor()

Dataset = pd.read_csv('Celltower_train-412alf.csv', sep=',',header=0)
X = Dataset.drop(axis=0, columns=['Radio', 'Cell' , 'Lon' ,'Lat','RSCP' ,'Traffic','Ecno','Area coverage', 'Predict'])
Y = Dataset['Predict']

X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.30, random_state=0)
SVM = SVC(decision_function_shape="ovo")
SVM.fit(X_train, y_train)
Y_Pred =  SVM.predict(X_test)
round(SVM.score(X_test, y_test), 4)
print('SVM:',SVM.score(X_test, y_test))

mycursor.execute('SELECT Traffic FROM locations WHERE id=(SELECT max(id) FROM locations)')
myresult = mycursor.fetchone()
for row in myresult:
    Traffic = int(row)


mycursor.execute('SELECT Distance FROM locations WHERE id=(SELECT max(id) FROM locations)')
myresult = mycursor.fetchone()
for row in myresult:
    Distance = row


newinput = [[Distance]]
new_output = SVM.predict(newinput)
print(new_output )
if (new_output == 0 ):
    sqlUpdateZero="UPDATE locations SET Prediction='Doesnt satisfy reqiurments' WHERE id=(SELECT max(id) FROM locations)"
    mycursor.execute(sqlUpdateZero)
elif(new_output == 1  and 77700000<=Traffic<736000000 ):
    sqlUpdateOne = "UPDATE locations SET Prediction='Satisfy Reqiurments' WHERE id=(SELECT max(id) FROM locations)"
    mycursor.execute(sqlUpdateOne)
else:
    sqlUpdateTZero = "UPDATE locations SET Prediction='Doesnt satisfy reqiurments' WHERE id=(SELECT max(id) FROM locations)"
    mycursor.execute(sqlUpdateTZero)
mydb.commit()


