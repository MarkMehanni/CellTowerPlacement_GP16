import pyrebase
from flask import*
from firebase_admin import db

config={

    "apiKey": "AIzaSyCCHKwyHEouhriE3t-k4hKXbcrFuTWcxhY",
    "authDomain": "cidfirebaseproject-cdef4.firebaseapp.com",
    "databaseURL": "https://cidfirebaseproject-cdef4.firebaseio.com",
    "projectId": "cidfirebaseproject-cdef4",
    "storageBucket": "cidfirebaseproject-cdef4.appspot.com",
    "messagingSenderId": "120412490594",
    "appId": "1:120412490594:web:a6f09b673ee6ca8669ba3b"


}


firebase=pyrebase.initialize_app(config)
db=firebase.database()


app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def basic():
	if request.method == 'POST':
		if request.form['submit'] == 'add':

			name = request.form['name']
			todo = db.child("Events Table").get()
			to = todo.val()
			return render_template('index.html', t=to.values())
		elif request.form['submit'] == 'delete':
			db.child("todo").remove()
		return render_template('index.html')
	return render_template('index.html')

if __name__ == '__main__':
	app.run(debug=True)