package com.example.cid;

public class Events
{
    String ID ;


    String EventName ;

    String LocationOfEvent ;
    String Attendance;
    String Category;
    String Audience;

    public Events(String ID,   String eventName, String locationOfEvent,String attendance, String audience,String category ) {
        this.ID = ID;
        Attendance = attendance;
        Audience = audience;
        Category = category;
        EventName = eventName;
        LocationOfEvent = locationOfEvent;
    }

    public String getID() {
        return ID;
    }

    public void setID(String ID) {
        this.ID = ID;
    }

    public  String getAttendance(){
        return Attendance;
    }
    public  void setAttendance(String attendance){
        Attendance = attendance;

    }

    public String getAudience() {
        return Audience;
    }

    public void setAudience(String audience) {
        Audience = audience;
    }

    public String getEventName() {
        return EventName;
    }

    public void setEventName(String eventName) {
        EventName = eventName;
    }

    public String getCategory() {
        return Category;
    }

    public void setCategory(String category) {
        Category = category;
    }

    public String getLocationOfEvent() {
        return LocationOfEvent;
    }

    public void setLocationOfEvent(String locationOfEvent) {
        LocationOfEvent = locationOfEvent;
    }
}