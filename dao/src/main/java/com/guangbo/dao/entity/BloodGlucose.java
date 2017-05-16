package com.guangbo.dao.entity;

import java.io.Serializable;

public class BloodGlucose implements Serializable {
    private Integer id;

    private Integer glucose;

    private Byte type;

    private String time;

    private static final long serialVersionUID = 1L;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getGlucose() {
        return glucose;
    }

    public void setGlucose(Integer glucose) {
        this.glucose = glucose;
    }

    public Byte getType() {
        return type;
    }

    public void setType(Byte type) {
        this.type = type;
    }

    public String getTime() {
        return time;
    }

    public void setTime(String time) {
        this.time = time == null ? null : time.trim();
    }
}