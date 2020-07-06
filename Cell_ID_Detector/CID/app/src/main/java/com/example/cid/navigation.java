package com.example.cid;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class navigation extends AppCompatActivity {


    Button detect_btn,event_btn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_navigation);


        detect_btn=findViewById(R.id.buttonprofile);
        event_btn=findViewById(R.id.buttoneducation);

        detect_btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(getBaseContext(),User_Location.class);
                startActivity(intent);
            }
        });

        event_btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent x=new Intent(getBaseContext(),Add_Event.class);
                startActivity(x);
            }
        });
    }
}
