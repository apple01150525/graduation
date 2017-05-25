package com.guangbo.service;

import com.guangbo.dao.entity.Tiezi;
import com.guangbo.dao.po.PageInfoPO;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/19.
 */
public interface ITieZiService extends IBaseService<Tiezi>{
    int updateRebackTimes(int id);
}
