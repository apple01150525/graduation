package com.guangbo.service;

import com.guangbo.dao.po.PageInfoPO;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/14.
 */


public interface IBaseService<T> {
    int insert(T record);

    int delete(T record);

    List<T> query(T record);

    int update(T record);

    /**
     * 分页查询
     *
     * @param record     条件
     * @param startLimit 页码
     * @param endLimit   每页记录数 默认30
     * @return
     */
    public PageInfoPO<T> queryByPage(T record, int startLimit, int endLimit);

}
