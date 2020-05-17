package com.example.cid;

public class Events
{
    String ID ;
    String FirstName ;
    String LastName ;
    String Email ;
    String EventName ;
    String Mobile ;
    String LocationOfEvent ;

    public Events(String ID, String firstName, String lastName, String email, String eventName, String mobile, String locationOfEvent) {
        this.ID = ID;
        FirstName = firstName;
        LastName = lastName;
        Email = email;
        EventName = eventName;
        Mobile = mobile;
        LocationOfEvent = locationOfEvent;
    }

    public String getID() {
        return ID;
    }

    public void setID(String ID) {
        this.ID = ID;
    }

    public String getFirstName() {
        return FirstName;
    }

    public void setFirstName(String firstName) {
        FirstName = firstName;
    }

    public String getLastName() {
        return LastName;
    }

    public void setLastName(String lastName) {
        LastName = lastName;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String email) {
        Email = email;
    }

    public String getEventName() {
        return EventName;
    }

    public void setEventName(String eventName) {
        EventName = eventName;
    }

    public String getMobile() {
        return Mobile;
    }

    public void setMobile(String mobile) {
        Mobile = mobile;
    }

    public String getLocationOfEvent() {
        return LocationOfEvent;
    }

    public void setLocationOfEvent(String locationOfEvent) {
        LocationOfEvent = locationOfEvent;
    }
}
