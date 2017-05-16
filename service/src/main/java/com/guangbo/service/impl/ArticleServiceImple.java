package com.guangbo.service.impl;

import com.guangbo.dao.entity.Article;
import com.guangbo.dao.entity.ArticleExample;
import com.guangbo.dao.mapper.ArticleMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IArticleService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by muyawei on 2017/5/16.
 */
@Service
public class ArticleServiceImple implements IArticleService{
    @Autowired
    private ArticleMapper articleMapper;

    public Article getArticleInfo(Integer id) {
        return articleMapper.selectByPrimaryKey(id);
    }

}
