package com.guangbo.service.impl;

import com.guangbo.dao.entity.Weight;
import com.guangbo.dao.entity.WeightExample;
import com.guangbo.dao.entity.WeightExt;
import com.guangbo.dao.mapper.WeightMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IWeightService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.util.ObjectUtils;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
@Service
public class WeightServeceImpl implements IWeightService {
    @Autowired
    private WeightMapper weightMapper;

    public int insert(Weight record) {
        return weightMapper.insertSelective(record);
    }

    public int delete(Weight record) {
        return 0;
    }

    public List<Weight> query(Weight record) {
        WeightExample example = new WeightExample();
        WeightExample.Criteria criteria = example.createCriteria();
        return weightMapper.selectByExample(example);

    }

    public int update(Weight record) {
        WeightExample example = new WeightExample();
        WeightExample.Criteria criteria = example.createCriteria();
        if (!ObjectUtils.isEmpty(record.getTime())) {
            criteria.andTimeEqualTo(record.getTime());
        }
        return   weightMapper.updateByExampleSelective(record,example);
    }

    public int update(WeightExt record) {
        WeightExample example = new WeightExample();
        WeightExample.Criteria criteria = example.createCriteria();
        if (!ObjectUtils.isEmpty(record.getOldTime())) {
            criteria.andTimeEqualTo(record.getOldTime());
        }
      return   weightMapper.updateByExampleSelective(record,example);
    }

    public PageInfoPO<Weight> queryByPage(Weight record, int startLimit, int endLimit) {
        return null;
    }
}
