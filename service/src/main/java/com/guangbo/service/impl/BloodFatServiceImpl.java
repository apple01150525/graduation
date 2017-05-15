package com.guangbo.service.impl;

import com.guangbo.dao.entity.BloodFat;
import com.guangbo.dao.mapper.BloodFatMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IBloodFatService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
@Service
public class BloodFatServiceImpl implements IBloodFatService{
    @Autowired
    private BloodFatMapper bloodFatMapper;
    public int insert(BloodFat record) {
       return bloodFatMapper.insertSelective(record);
    }

    public int delete(BloodFat record) {
        return 0;
    }

    public List<BloodFat> query(BloodFat record) {
        return null;
    }

    public int update(BloodFat record) {
        return 0;
    }

    public PageInfoPO<BloodFat> queryByPage(BloodFat record, int startLimit, int endLimit) {
        return null;
    }
}
