package com.guangbo.service.impl;

import com.guangbo.dao.entity.ChooseQuestion;
import com.guangbo.dao.entity.ChooseQuestionExample;
import com.guangbo.dao.entity.UserAnswer;
import com.guangbo.dao.mapper.ChooseQuestionMapper;
import com.guangbo.dao.mapper.UserAnswerMapper;
import com.guangbo.dao.po.PageInfoPO;
import com.guangbo.service.IPaperService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by huanyan on 2017/5/15.
 */
@Service
public class PaperServiceImpl implements IPaperService{
    @Autowired
    private ChooseQuestionMapper chooseQuestionMapper;

    public int insert(ChooseQuestion record) {
        return 0;
    }
    

    public int delete(ChooseQuestion record) {
        return 0;
    }

    public List query(ChooseQuestion record) {
        ChooseQuestionExample chooseQuestionExample = new ChooseQuestionExample();
        ChooseQuestionExample.Criteria criteria = chooseQuestionExample.createCriteria();
        if (record.getId() != null) {
            criteria.andIdEqualTo(record.getId());
        }
        return chooseQuestionMapper.selectByExample(chooseQuestionExample);
    }

    public int update(ChooseQuestion record) {
        return 0;
    }

    public PageInfoPO queryByPage(ChooseQuestion record, int startLimit, int endLimit) {
        return null;
    }
}
