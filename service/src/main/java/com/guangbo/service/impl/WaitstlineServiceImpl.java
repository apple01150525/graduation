package com.guangbo.service.impl;

import com.guangbo.dao.entity.TemperatureExample;
import com.guangbo.dao.entity.Waistline;
import com.guangbo.dao.entity.WaistlineExample;
import com.guangbo.dao.mapper.WaistlineMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IWaistlineService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.util.ObjectUtils;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
@Service
public class WaitstlineServiceImpl implements IWaistlineService {
    @Autowired
    private WaistlineMapper waistlineMapper;
    public int insert(Waistline record) {
        return waistlineMapper.insertSelective(record);
    }

    public int delete(Waistline record) {
        return 0;
    }

    public List<Waistline> query(Waistline record) {

        WaistlineExample example = new WaistlineExample();
        WaistlineExample.Criteria criteria = example.createCriteria();
        return waistlineMapper.selectByExample(example);
    }

    public int update(Waistline record) {

        WaistlineExample example = new WaistlineExample();
        WaistlineExample.Criteria criteria = example.createCriteria();
        if (!ObjectUtils.isEmpty(record.getTime())) {
            criteria.andTimeEqualTo(record.getTime());
        }
        return   waistlineMapper.updateByExampleSelective(record,example);
    }

    public PageInfoPO<Waistline> queryByPage(Waistline record, int startLimit, int endLimit) {
        return null;
    }
}
