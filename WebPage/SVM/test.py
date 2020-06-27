from sklearn import datasets
from sklearn.model_selection import train_test_split
from sklearn.model_selection import GridSearchCV
from sklearn.metrics import classification_report
from sklearn.svm import SVC
import pandas as pd
import numpy as np



print(__doc__)

# Loading the Digits dataset
df = pd.read_csv('Celltower_train.csv')

# To apply an classifier on this data, we need to flatten the image, to
# turn the data in a (samples, feature) matrix:
X = np.array(df.drop(['Radio', 'Cell' , 'Lon' ,'Lat'  ,'RSCP', 'Ecno','Area coverage', 'Predict'],1))
y = np.array(df['Predict'])

# Split the dataset in two equal parts
X_train, X_test, y_train, y_test = train_test_split( X, y, test_size=0.3, random_state=0 )

# Set the parameters by cross-validation
tuned_parameters = [{'kernel': ['rbf'], 'gamma': [10,20,30 ,40 ,50],
                     'C': [ 10, 100]}]

scores = ['precision', 'recall']

for score in scores:
    print("# Tuning hyper-parameters for %s" % score)
    print()

    clf = GridSearchCV(
        SVC(), tuned_parameters, scoring='%s_macro' % score
    )
    clf.fit(X_train, y_train)

    print("Best parameters set found on development set:")
    print()
    print(clf.best_params_)
    print()
    print("Grid scores on development set:")
    print()
    means = clf.cv_results_['mean_test_score']
    stds = clf.cv_results_['std_test_score']
    for mean, std, params in zip(means, stds, clf.cv_results_['params']):
        print("%0.3f (+/-%0.03f) for %r"
              % (mean, std * 2, params))
    print()

    print("Detailed classification report:")
    print()
    print("The model is trained on the full development set.")
    print("The scores are computed on the full evaluation set.")
    print()
    y_true, y_pred = y_test, clf.predict(X_test)
    print(classification_report(y_true, y_pred))
    print()

new_input = [[60.254 , 736000000]]
new_output = clf.predict(new_input)
print(new_input, new_output)