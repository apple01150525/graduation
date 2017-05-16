package com.guangbo.dao.entity;

import java.util.List;

/**
 * Created by guoshuang1 on 2017/5/16.
 */
public class CQ {
    private int count;
    private List<ChooseQuestion> chooseQuestions;

    public int getCount() {
        return count;
    }

    public void setCount(int count) {
        this.count = count;
    }

    public List<ChooseQuestion> getChooseQuestions() {
        return chooseQuestions;
    }

    public void setChooseQuestions(List<ChooseQuestion> chooseQuestions) {
        this.chooseQuestions = chooseQuestions;
    }
}
