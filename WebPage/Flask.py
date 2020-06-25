from flask import Flask, render_template, request, redirect, Response, jsonify
from SVM.SVMClassifier import svm_model
from SVM import Predict
app = Flask(__name__)

@app.route('/')
def output():
	return render_template("Confirmation_Data.html")

@app.route('/Predict', methods = ['POST','GET'])
def Predict():
	if request.method == 'POST':
	
	Distance = request.form['Nearest']
	
	result = svm_model([[Distance]])
 
	return render_template('Predict.html', result = result)

if __name__ == '__main__':
	# run!
	app.run(debug = True)
