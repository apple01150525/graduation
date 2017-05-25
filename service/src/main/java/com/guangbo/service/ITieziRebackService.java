package com.guangbo.service;

import com.guangbo.dao.entity.TieziReback;

/**
 * Created by gaoguangbo on 2017/5/19.
 */
public interface ITieziRebackService extends IBaseService<TieziReback>{
    int updateRebackTimes(int id);
}
