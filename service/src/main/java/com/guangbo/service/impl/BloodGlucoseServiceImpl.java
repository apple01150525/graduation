package com.guangbo.service.impl;

import com.guangbo.dao.entity.BloodGlucose;
import com.guangbo.dao.mapper.BloodGlucoseMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IBloodGlucoseService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
@Service
public class BloodGlucoseServiceImpl implements IBloodGlucoseService {
    @Autowired
    private BloodGlucoseMapper bloodGlucoseMapper;
    public int insert(BloodGlucose record) {
        return bloodGlucoseMapper.insertSelective(record);
    }

    public int delete(BloodGlucose record) {
        return 0;
    }

    public List<BloodGlucose> query(BloodGlucose record) {
        return null;
    }

    public int update(BloodGlucose record) {
        return 0;
    }

    public PageInfoPO<BloodGlucose> queryByPage(BloodGlucose record, int startLimit, int endLimit) {
        return null;
    }
}
