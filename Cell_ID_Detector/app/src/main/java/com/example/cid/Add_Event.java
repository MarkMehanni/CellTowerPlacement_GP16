package com.example.cid;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class Add_Event extends AppCompatActivity
{

    EditText FirstNameTextField , LastNameTextField, EmailTextField ,EventNameTextField, MobileTextField , LocationOfEventTextField;
    Button AddEventBtn;
    RadioButton RadioGenderMale , RadioGenderFemale ;
    DatabaseReference DatabaseReferenceObject = FirebaseDatabase.getInstance().getReference("Events Table");
    FirebaseAuth FirebaseAuthObject;
    FirebaseDatabase FirebaseDatabaseObject;
    Events EventsClassObject;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add__event);

        FirstNameTextField = (EditText) findViewById(R.id.FirstName);
        LastNameTextField = (EditText) findViewById(R.id.LastName);
        EmailTextField = (EditText) findViewById(R.id.Email);
        EventNameTextField = (EditText) findViewById(R.id.EventName);
        MobileTextField = (EditText) findViewById(R.id.Mobile);
        LocationOfEventTextField = (EditText) findViewById(R.id.LocationOfEvent);
        AddEventBtn = (Button) findViewById(R.id.AddEventBtn);
        RadioGenderMale = (RadioButton) findViewById(R.id.RadioGenderMale);
        RadioGenderFemale = (RadioButton) findViewById(R.id.RadioGenderFemale);



        FirebaseAuthObject = FirebaseAuth.getInstance();
        AddEventBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Add_Event();

            }
        });
    }
    private void Add_Event()
    {
        String ID = DatabaseReferenceObject.push().getKey();
        String First_Name = FirstNameTextField.getText().toString();
        String Last_Name = LastNameTextField.getText().toString();
        String Email = EmailTextField.getText().toString();
        String Event_Name = EventNameTextField.getText().toString();
        String Mobile = MobileTextField.getText().toString();
        String Location_Of_Event = LocationOfEventTextField.getText().toString();
        String Gender = "";

//        if (RadioGenderMale.isChecked()) {
//            Gender = "Male";
//        }
//       else if (RadioGenderFemale.isChecked()) {
//            Gender = "Female";
//        }
        if (TextUtils.isEmpty(First_Name)) {
            Toast.makeText(Add_Event.this, "Please enter your first name. ", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(Last_Name)) {
            Toast.makeText(Add_Event.this, "Please enter your last name. ", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(Email)) {
            Toast.makeText(Add_Event.this, "Please enter email name.", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(Event_Name)) {
            Toast.makeText(Add_Event.this, "Please event name.", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(Mobile)) {
            Toast.makeText(Add_Event.this, "Please enter your mobile number. ", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(Location_Of_Event)) {
            Toast.makeText(Add_Event.this, "Please enter location of the event. ", Toast.LENGTH_LONG).show();
        }
//        else if (TextUtils.isEmpty(Gender)) {
//            Toast.makeText(Registration.this, "Please choose gender. ", Toast.LENGTH_LONG).show();
//        }
        else {

            EventsClassObject = new Events(ID, First_Name, Last_Name, Email, Event_Name, Mobile, Location_Of_Event);
            DatabaseReferenceObject.child(ID).setValue(EventsClassObject);
            Toast.makeText(Add_Event.this, "Event Add Successfully", Toast.LENGTH_LONG).show();
        }

    };
}

