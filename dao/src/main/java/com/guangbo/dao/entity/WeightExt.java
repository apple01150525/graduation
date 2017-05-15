package com.guangbo.dao.entity;

import com.guangbo.common.DateUtil;

import java.util.Date;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
public class WeightExt extends Weight{
    private String dayTime;

    @Override
    public void setTime(Date time) {
        super.setTime(time);
        dayTime = DateUtil.formatToDay(super.getTime());
    }

    public String getDayTime() {
        return dayTime;
    }

    public void setDayTime(String dayTime) {
        this.dayTime = dayTime;
    }
}
