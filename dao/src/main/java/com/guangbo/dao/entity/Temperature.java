package com.guangbo.dao.entity;

import java.io.Serializable;

public class Temperature implements Serializable {
    private Integer id;

    private Integer temper;

    private String time;

    private static final long serialVersionUID = 1L;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getTemper() {
        return temper;
    }

    public void setTemper(Integer temper) {
        this.temper = temper;
    }

    public String getTime() {
        return time;
    }

    public void setTime(String time) {
        this.time = time == null ? null : time.trim();
    }
}