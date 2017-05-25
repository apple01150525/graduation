package com.guangbo.service.impl;

import com.guangbo.dao.entity.Tiezi;
import com.guangbo.dao.entity.TieziExample;
import com.guangbo.dao.mapper.TieziMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.ITieZiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/19.
 */
@Service
public class TieziServiceImpl implements ITieZiService {
    @Autowired
    private TieziMapper tieziMapper;

    public int insert(Tiezi record) {
        return tieziMapper.insertSelective(record);
    }

    public int delete(Tiezi record) {
        return 0;
    }

    public List<Tiezi> query(Tiezi record) {
        return null;
    }

    public int update(Tiezi record) {
        return 0;
    }

    public PageInfoPO<Tiezi> queryByPage(Tiezi record, int startLimit, int endLimit) {
        TieziExample example = new TieziExample();
        TieziExample.Criteria criteria = example.createCriteria();
        if (record.getTypeId() != null) {
            criteria.andTypeIdEqualTo(record.getTypeId());
        }
        example.setPageNum(startLimit, endLimit);
        PageInfoPO<Tiezi> results = new TieziExample();
        results.setPageNum(startLimit, endLimit);
        List<Tiezi> tiezis = tieziMapper.selectByExampleWithBLOBs(example);
        results.setResults(tiezis);
        return results;
    }

    public int updateRebackTimes(int id) {
        return tieziMapper.updateRebackTimes(id);
    }
}
