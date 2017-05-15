package com.guangbo.dao.po;

import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/14.
 */
public class PageInfoPO<T> {
    private int count;
    private int startLimit;
    private int pageSize=30;
    private int pageNum;
    private List<T> results;

    public int getCount() {
        return count;
    }
    public void setCount(int count) {
        this.count = count;
    }
    public int getStartLimit() {
        return startLimit;
    }
    public void setStartLimit(int pageNum) {
        this.startLimit = (pageNum-1)*pageSize;
    }
    public int getPageSize() {
        return pageSize;
    }
    public void setPageSize(int pageSize) {
        this.pageSize = pageSize<=0?30:pageSize;
    }
    public List<T> getResults() {
        return results;
    }
    public void setResults(List<T> results) {
        this.results = results;
    }
    public int getPageNum() {
        return pageNum;
    }
    public void setPageNum(int pageNum) {
        this.pageNum = pageNum;
        this.startLimit=(pageNum-1)*pageSize;
    }
    public void setPageNum(int pageNum,int pageSize) {
        this.pageNum = pageNum;
        this.pageSize=pageSize;
        this.startLimit=(pageNum-1)*pageSize;
    }
}

