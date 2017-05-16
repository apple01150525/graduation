package com.guangbo.service;

import com.guangbo.dao.entity.News;
import com.guangbo.dao.entity.UserAnswer;
import com.guangbo.dao.mapper.NewsMapper;
import com.guangbo.dao.po.PageInfoPO;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by guoshuang1 on 2017/5/16.
 */
public interface IHealthNewsService {
    public int insert(News record);

    public int delete(News record);

    public List<News> query(News record);

    public int update(News record);

    public PageInfoPO<News> queryByPage(News record, int startLimit, int endLimit);
}
