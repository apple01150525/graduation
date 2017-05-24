package com.guangbo.controller;

import com.guangbo.common.WebResult;
import com.guangbo.dao.entity.Tiezi;
import com.guangbo.dao.entity.TieziReback;
import com.guangbo.dao.entity.TieziType;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.ITieZiService;
import com.guangbo.service.ITieziRebackService;
import com.guangbo.service.ITieziTypeService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/19.
 */
@Controller
@RequestMapping("/tiezi")
public class TieziController {
    @Autowired
    private ITieziTypeService tieziTypeService;
    @Autowired
    private ITieZiService tieZiService;
    @Autowired
    private ITieziRebackService tieziRebackService;

    /**
     * 查询所有帖子类型
     *
     * @return 帖子类型数组
     */
    @RequestMapping("/types")
    @ResponseBody
    public WebResult getTypes() {
        WebResult result = new WebResult();
        result.setCode("00");
        result.setMsg("成功");
        List<TieziType> types = tieziTypeService.query(new TieziType());
        result.setResult(types);
        return result;
    }

    @RequestMapping("addTiezi")
    @ResponseBody
    public WebResult addTiezi(Tiezi record) {
        WebResult result = new WebResult();
        result.setCode("00");
        result.setMsg("成功");
        int i = tieZiService.insert(record);
        if (i == 0) {
            result.setCode("01");
            result.setMsg("失败");
        }
        return result;
    }

    /**
     * 获取帖子
     *
     * @param record record.typeId 帖子类型
     *               为空|-1 时，查询全部
     * @return 某一类的帖子集合
     */
    @RequestMapping("/tiezis")
    @ResponseBody
    public WebResult getTiezi(Tiezi record, Integer pageNum, Integer pageSize) {
        WebResult result = new WebResult();
        result.setCode("00");
        result.setMsg("成功");
        PageInfoPO<Tiezi> tieziPageInfoPO = tieZiService.queryByPage(record, pageNum, pageSize);
        result.setResult(tieziPageInfoPO);
        return result;
    }

    @RequestMapping("/addTieziReback")
    @ResponseBody
    public WebResult addTieziBack(TieziReback record) {
        WebResult result = new WebResult();
        result.setCode("01");
        result.setMsg("失败");
        if (record.getUserId() == null) {
            return result;
        }
        if (record.getType() == null) {
            return result;
        }
        if (record.gettId() == null) {
            return result;
        }
        if (record.getContent() == null) {
            return result;
        }
        int insert = tieziRebackService.insert(record);
        if (insert == 1) {
            result.setCode("00");
            result.setMsg("成功");

        }
        return result;
    }

    /**
     * 查询第一、第二回复
     *
     * @param record record.tid 回复id
     *               type 0:一级回帖  1：二级回帖
     * @return
     */
    @RequestMapping("/getBack/{type}")
    @ResponseBody
    public WebResult getFirstReback(TieziReback record, Integer pageNum, Integer pageSize, @PathVariable Byte type) {
        WebResult webResult = new WebResult();
        webResult.setCode("00");
        webResult.setMsg("成功");
        record.setType(type);
        PageInfoPO<TieziReback> tieziRebackPageInfoPO = tieziRebackService.queryByPage(record, pageNum, pageSize);
        webResult.setResult(tieziRebackPageInfoPO);
        return webResult;
    }
}
