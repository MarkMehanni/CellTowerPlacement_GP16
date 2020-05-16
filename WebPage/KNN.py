import urllib

import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
from IPython import get_ipython
from pylab import matplotlib, rcParams

import inline
import scipy
import sklearn
from flask import Flask
from sklearn import metrics, neighbors, preprocessing
from sklearn.model_selection import train_test_split
from sklearn.neighbors import KNeighborsClassifier

app = Flask(__name__)

@app.route("/knn")


def knn():

    np.set_printoptions(precision=4 , suppress= True)
    rcParams['figure.figsize']= 7,4
    plt.style.use('seaborn-whitegrid')

    reading_dataset=pd.read_csv(r"‪C:\wamp64\www\WebPage\Dataset_final2.csv")
    print(reading_dataset)

    X_Parameters = reading_dataset.ix[:,(3,4,5,6,7,8)].values
    Y_Target= reading_dataset.ix[:,(9)].values

    X = preprocessing.scale(X_Parameters)
    X_Train ,X_Test ,Y_Train ,Y_Test = train_test_split(X , Y_Target , test_size=0.2, random_state=15)

    clf = neighbors.KNeighborsClassifier()
    clf.fit(X_Train , Y_Train)

    Y_Expect = Y_Test
    Y_Predict = clf.predict(X_Test)

    print(metrics.classification_report(Y_Expect ,Y_Predict))

    return knn()
if __name__ == "__main__":
    app.run()
