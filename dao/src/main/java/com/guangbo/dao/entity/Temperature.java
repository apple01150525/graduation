package com.guangbo.dao.entity;

import java.io.Serializable;
import java.util.Date;

public class Temperature implements Serializable {
    private Integer id;

    private Integer temper;

    private Date time;

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

    public Date getTime() {
        return time;
    }

    public void setTime(Date time) {
        this.time = time;
    }
}