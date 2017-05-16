package com.guangbo.service.impl;

import com.guangbo.dao.entity.BloodFatExample;
import com.guangbo.dao.entity.News;
import com.guangbo.dao.entity.NewsExample;
import com.guangbo.dao.mapper.NewsMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IHealthNewsService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by guoshuang1 on 2017/5/16.
 */
@Service
public class HeaalthNewsServiceImpl implements IHealthNewsService {
    @Autowired
    NewsMapper newsMapper;
    public int insert(News record) {
        return 0;
    }

    public int delete(News record) {
        return 0;
    }

    public List<News> query(News record) {
        NewsExample example = new NewsExample();

        NewsExample.Criteria criteria = example.createCriteria();
        return newsMapper.selectByExampleWithBLOBs(example);
    }

    public int update(News record) {
        return 0;
    }

    public PageInfoPO<News> queryByPage(News record, int startLimit, int endLimit) {
        return null;
    }
}
