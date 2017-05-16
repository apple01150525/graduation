package com.guangbo.service.impl;

import com.guangbo.dao.entity.BloodGlucoseExample;
import com.guangbo.dao.entity.Temperature;
import com.guangbo.dao.entity.TemperatureExample;
import com.guangbo.dao.mapper.TemperatureMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.ITemperatureService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.util.ObjectUtils;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
@Service
public class TemperatureServiceImpl implements ITemperatureService {
    @Autowired
    private TemperatureMapper temperatureMapper;
    public int insert(Temperature record) {
        return temperatureMapper.insertSelective(record);
    }

    public int delete(Temperature record) {
        return 0;
    }

    public List<Temperature> query(Temperature record) {

        TemperatureExample example = new TemperatureExample();
        TemperatureExample.Criteria criteria = example.createCriteria();
        return temperatureMapper.selectByExample(example);
    }

    public int update(Temperature record) {
        TemperatureExample example = new TemperatureExample();
        TemperatureExample.Criteria criteria = example.createCriteria();
        if (!ObjectUtils.isEmpty(record.getTime())) {
            criteria.andTimeEqualTo(record.getTime());
        }
        return   temperatureMapper.updateByExampleSelective(record,example);
    }

    public PageInfoPO<Temperature> queryByPage(Temperature record, int startLimit, int endLimit) {
        return null;
    }
}
