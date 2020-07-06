package com.example.cid;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public  class SignUp extends AppCompatActivity {
    DatabaseReference myref= FirebaseDatabase.getInstance().getReference();
    EditText Email_EditText ,Password_EditText, Name ,Phone , Address , ID;
    Button SignUp_Button;
    String userID;
    FirebaseAuth firebaseAuth; // firebase auth object

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);
        Name=findViewById(R.id.username);
        Phone=findViewById(R.id.userphone);
        Address=findViewById(R.id.useraddress);
        ID=findViewById(R.id.userid);

        Email_EditText=findViewById(R.id.Email_EditText);
        Password_EditText=findViewById(R.id.Password_EditText);
        SignUp_Button=findViewById(R.id.SignUp_Button);

        firebaseAuth=FirebaseAuth.getInstance();
        SignUp_Button.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {

                firebaseAuth.createUserWithEmailAndPassword(Email_EditText.getText().toString(),Password_EditText.getText().toString()).addOnCompleteListener(new OnCompleteListener<AuthResult>() {
                    @Override
                    public void onComplete(@NonNull Task<AuthResult> task) {
                        if(task.isSuccessful()){
                            FirebaseUser users=firebaseAuth.getCurrentUser();
                            userID = users.getUid();
                            adduser();

                            Intent intent=new Intent(getBaseContext(),navigation.class);
                            startActivity(intent);
                        }
                        else{
                            Toast.makeText(SignUp.this, task.getException().getMessage(), Toast.LENGTH_LONG).show();
                            Intent intent=new Intent(getBaseContext(),LoginActivity.class);
                            startActivity(intent);

                        }
                    }


                });
            }
        });


    }

    private void adduser(){

        String name=Name.getText().toString();
        String phone=Phone.getText().toString();
        String address=Address.getText().toString();
        String id=ID.getText().toString();
        myref.child("users").child(userID).child("name").setValue(name);
        myref.child("users").child(userID).child("phone").setValue(phone);
        myref.child("users").child(userID).child("address").setValue(address);
        myref.child("users").child(userID).child("id").setValue(id);


    }
}