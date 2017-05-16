package com.guangbo.controller;

import com.alibaba.fastjson.JSON;
import com.guangbo.dao.entity.News;
import com.guangbo.service.IHealthNewsService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 * Created by guoshuang1 on 2017/5/16.
 */
@Controller
public class HealthNewsController {
    @Autowired
    IHealthNewsService healthNewsService;
    @RequestMapping(value = "/get/healthNews", produces = "application/json;charset=UTF-8")
    @ResponseBody
    public String get(){
        News news = new News();
        News news1 = healthNewsService.query(news).get(0);
        System.out.print(news1.getContent());
        String json = JSON.toJSONString( healthNewsService.query(news));
        return json;
    }

}
