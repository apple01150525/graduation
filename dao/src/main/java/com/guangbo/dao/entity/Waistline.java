package com.guangbo.dao.entity;

import java.io.Serializable;
import java.util.Date;

public class Waistline implements Serializable {
    private Integer id;

    private Integer waistline;

    private Date time;

    private static final long serialVersionUID = 1L;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getWaistline() {
        return waistline;
    }

    public void setWaistline(Integer waistline) {
        this.waistline = waistline;
    }

    public Date getTime() {
        return time;
    }

    public void setTime(Date time) {
        this.time = time;
    }
}