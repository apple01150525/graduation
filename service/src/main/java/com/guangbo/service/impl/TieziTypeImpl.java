package com.guangbo.service.impl;

import com.guangbo.dao.entity.TieziType;
import com.guangbo.dao.entity.TieziTypeExample;
import com.guangbo.dao.mapper.TieziTypeMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.ITieziTypeService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/19.
 */
@Service
public class TieziTypeImpl implements ITieziTypeService {
    @Autowired
    private TieziTypeMapper tieziTypeMapper;
    public int insert(TieziType record) {
        return 0;
    }

    public int delete(TieziType record) {
        return 0;
    }

    public List<TieziType> query(TieziType record) {
        TieziTypeExample example = new TieziTypeExample();
        TieziTypeExample.Criteria criteria = example.createCriteria();
        if (record.getId() != null) {
            criteria.andIdEqualTo(record.getId());
        }
        if (record.getId() != null) {
            criteria.andNameEqualTo(record.getName());
        }
        return tieziTypeMapper.selectByExample(example);
    }

    public int update(TieziType record) {
        return 0;
    }

    public PageInfoPO<TieziType> queryByPage(TieziType record, int startLimit, int endLimit) {
        return null;
    }
}
