package com.guangbo.service;

import com.guangbo.dao.entity.Weight;
import com.guangbo.dao.entity.WeightExample;
import com.guangbo.dao.entity.WeightExt;
import com.guangbo.service.IBaseService;

/**
 * Created by gaoguangbo on 2017/5/15.
 */
public interface IWeightService extends IBaseService<Weight> {
    int update(WeightExt weightExt);

}
