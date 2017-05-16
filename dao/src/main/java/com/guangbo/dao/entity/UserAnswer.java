package com.guangbo.dao.entity;

import java.io.Serializable;

public class UserAnswer implements Serializable {
    private Integer id;

    private Integer userId;

    private Integer chooseQuestionId;

    private String answer;

    private String trueAnswer;

    private static final long serialVersionUID = 1L;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getUserId() {
        return userId;
    }

    public void setUserId(Integer userId) {
        this.userId = userId;
    }

    public Integer getChooseQuestionId() {
        return chooseQuestionId;
    }

    public void setChooseQuestionId(Integer chooseQuestionId) {
        this.chooseQuestionId = chooseQuestionId;
    }

    public String getAnswer() {
        return answer;
    }

    public void setAnswer(String answer) {
        this.answer = answer == null ? null : answer.trim();
    }

    public String getTrueAnswer() {
        return trueAnswer;
    }

    public void setTrueAnswer(String trueAnswer) {
        this.trueAnswer = trueAnswer == null ? null : trueAnswer.trim();
    }
}