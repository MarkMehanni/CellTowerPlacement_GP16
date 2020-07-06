package com.example.cid;



import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.Spinner;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class Add_Event extends AppCompatActivity
{
    String[] categories = {"Fitness","Festival","Arts","Sport","Academic","Performance" };
    String[]Audience={"General public","Teens","Adults"};

//DatePicker DatePick;
    EditText  EventNameTextField,AttendanceTextField, LocationOfEventTextField;
    Button AddEventBtn;
    RadioButton RadioGenderMale , RadioGenderFemale ;
    DatabaseReference DatabaseReferenceObject = FirebaseDatabase.getInstance().getReference("Events Table");
    FirebaseAuth FirebaseAuthObject;
    FirebaseDatabase FirebaseDatabaseObject;
    Events EventsClassObject;
    Spinner Categorypick,Audiencepick;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_event);

        AttendanceTextField = (EditText) findViewById(R.id.attendance);
        //DatePick=(DatePicker) findViewById(R.id.date);
        EventNameTextField = (EditText) findViewById(R.id.EventName);
        LocationOfEventTextField = (EditText) findViewById(R.id.LocationOfEvent);
        AddEventBtn = (Button) findViewById(R.id.AddEventBtn);
        Categorypick=(Spinner)findViewById(R.id.category);
        ArrayAdapter<String> adaptercat = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, categories);
        adaptercat.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        Categorypick.setAdapter(adaptercat);
//        Categorypick.setOnItemSelectedListener((AdapterView.OnItemSelectedListener) this);

        Audiencepick=(Spinner)findViewById(R.id.audience);
        ArrayAdapter<String> adapteraud = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, Audience);
        adapteraud.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        Audiencepick.setAdapter(adapteraud);
      //  Audiencepick.setOnItemSelectedListener((AdapterView.OnItemSelectedListener) this);



        FirebaseAuthObject = FirebaseAuth.getInstance();
        AddEventBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Add_Event();

            }
        });
    }


    public void onItemSelected(AdapterView<?> arg0, View arg1, int position,long id) {
        Toast.makeText(getApplicationContext(), "Selected Category: "+categories[position] ,Toast.LENGTH_SHORT).show();
    }

    public void onNothingSelected(AdapterView<?> arg0) {
        // TODO - Custom Code
    }

    private void Add_Event()
    {
        String ID = DatabaseReferenceObject.push().getKey();
        String Attendance = AttendanceTextField.getText().toString();
        String Audience = Audiencepick.getSelectedItem().toString();
        String Category = Categorypick.getSelectedItem().toString();
        String Event_Name = EventNameTextField.getText().toString();
        String Location_Of_Event = LocationOfEventTextField.getText().toString();


//        if (RadioGenderMale.isChecked()) {
//            Gender = "Male";
//        }
//       else if (RadioGenderFemale.isChecked()) {
//            Gender = "Female";
//        }
   /*     if (TextUtils.isEmpty(First_Name)) {
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
//        }*/
     //   else {

            EventsClassObject = new Events(ID,Event_Name,   Location_Of_Event, Attendance, Audience, Category  );
            DatabaseReferenceObject.child(ID).setValue(EventsClassObject);
            Toast.makeText(Add_Event.this, "Event Add Successfully", Toast.LENGTH_LONG).show();
     //   }

    };
}