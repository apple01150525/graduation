package com.guangbo.service.impl;

import com.guangbo.dao.entity.UserAnswer;
import com.guangbo.dao.mapper.UserAnswerMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IUserAnswerService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by huanyan on 2017/5/15.
 */
@Service
public class UserAnswerServiceImpl implements IUserAnswerService{
    @Autowired
    private UserAnswerMapper userAnswerMapper;

    public int insert(UserAnswer record) {
        return userAnswerMapper.insert(record);
    }

    public int delete(UserAnswer record) {
        return 0;
    }

    public List<UserAnswer> query(UserAnswer record) {
        return null;
    }

    public int update(UserAnswer record) {
        return 0;
    }

    public PageInfoPO<UserAnswer> queryByPage(UserAnswer record, int startLimit, int endLimit) {
        return null;
    }
}
