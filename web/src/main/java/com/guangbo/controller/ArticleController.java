package com.guangbo.controller;

import com.guangbo.dao.entity.Article;
import com.guangbo.service.impl.ArticleServiceImple;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 * Created by muyawei on 2017/5/16.
 */
@Controller
@RequestMapping("/article")
public class ArticleController {
    @Autowired
    private ArticleServiceImple articleServiceImple;

    @RequestMapping("/getContent")
    @ResponseBody
    public Article getArticleInfo(Integer id)
    {
       Article article = articleServiceImple.getArticleInfo(id);
       return article;
    }
}
