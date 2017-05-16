package com.guangbo.dao.entity;

import java.io.Serializable;

public class BloodFat implements Serializable {
    private Integer id;

    private Integer cholesterol;

    private Integer triglyceride;

    private Integer highCholesterol;

    private Integer lowCholesterol;

    private String time;

    private static final long serialVersionUID = 1L;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getCholesterol() {
        return cholesterol;
    }

    public void setCholesterol(Integer cholesterol) {
        this.cholesterol = cholesterol;
    }

    public Integer getTriglyceride() {
        return triglyceride;
    }

    public void setTriglyceride(Integer triglyceride) {
        this.triglyceride = triglyceride;
    }

    public Integer getHighCholesterol() {
        return highCholesterol;
    }

    public void setHighCholesterol(Integer highCholesterol) {
        this.highCholesterol = highCholesterol;
    }

    public Integer getLowCholesterol() {
        return lowCholesterol;
    }

    public void setLowCholesterol(Integer lowCholesterol) {
        this.lowCholesterol = lowCholesterol;
    }

    public String getTime() {
        return time;
    }

    public void setTime(String time) {
        this.time = time == null ? null : time.trim();
    }
}