package com.guangbo.service.impl;

import com.guangbo.dao.entity.BloodFatExample;
import com.guangbo.dao.entity.BloodGlucose;
import com.guangbo.dao.entity.BloodGlucoseExample;
import com.guangbo.dao.mapper.BloodGlucoseMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IBloodGlucoseService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.util.ObjectUtils;

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

        BloodGlucoseExample example = new BloodGlucoseExample();
        BloodGlucoseExample.Criteria criteria = example.createCriteria();
        return bloodGlucoseMapper.selectByExample(example);
    }

    public int update(BloodGlucose record) {

        BloodGlucoseExample example = new BloodGlucoseExample();
        BloodGlucoseExample.Criteria criteria = example.createCriteria();
        if (!ObjectUtils.isEmpty(record.getTime())) {
            criteria.andTimeEqualTo(record.getTime());
        }
        return   bloodGlucoseMapper.updateByExampleSelective(record,example);

    }

    public PageInfoPO<BloodGlucose> queryByPage(BloodGlucose record, int startLimit, int endLimit) {
        return null;
    }
}
