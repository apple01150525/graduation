package com.guangbo.service.impl;

import com.guangbo.dao.entity.TieziReback;
import com.guangbo.dao.entity.TieziRebackExample;
import com.guangbo.dao.mapper.TieziRebackMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.ITieziRebackService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import javax.xml.ws.WebServiceRef;
import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/19.
 */
@Service
public class TieZiRebackImpl implements ITieziRebackService {
    @Autowired
    private TieziRebackMapper tieziRebackMapper;
    public int insert(TieziReback record) {
        return tieziRebackMapper.insertSelective(record);
    }

    public int delete(TieziReback record) {
        return 0;
    }

    public List<TieziReback> query(TieziReback record) {
        TieziRebackExample example = new TieziRebackExample();
        TieziRebackExample.Criteria criteria = example.createCriteria();
        if (record.getType() != null) {
            criteria.andTypeEqualTo(record.getType());
        }
        if (record.getUserId() != null) {
            criteria.andUserIdEqualTo(record.getUserId());
        }
        if (record.gettId() != null) {
            criteria.andTIdEqualTo(record.gettId());
        }
        List<TieziReback> tieziRebacks = tieziRebackMapper.selectByExampleWithBLOBs(example);
        return tieziRebacks;
    }

    public int update(TieziReback record) {
        return 0;
    }

    public PageInfoPO<TieziReback> queryByPage(TieziReback record, int startLimit, int endLimit) {
        TieziRebackExample example = new TieziRebackExample();
        TieziRebackExample.Criteria criteria = example.createCriteria();
        if (record.getType() != null) {
            criteria.andTypeEqualTo(record.getType());
        }
        if (record.getUserId() != null) {
            criteria.andUserIdEqualTo(record.getUserId());
        }
        if (record.gettId() != null) {
            criteria.andTIdEqualTo(record.gettId());
        }
        example.setPageNum(startLimit, endLimit);
        PageInfoPO<TieziReback> results = new TieziRebackExample();
        results.setPageNum(startLimit, endLimit);
        List<TieziReback> tieziRebacks = tieziRebackMapper.selectByExampleWithBLOBs(example);
        int count = tieziRebackMapper.countByExample(example);
        results.setResults(tieziRebacks);
        results.setCount(count);
        return results;
    }
}
