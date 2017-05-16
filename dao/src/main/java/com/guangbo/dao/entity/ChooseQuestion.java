package com.guangbo.dao.entity;

import java.io.Serializable;

public class ChooseQuestion implements Serializable {
    private Integer id;

    private String questionInfo;

    private String answerA;

    private String answerB;

    private String answerC;

    private String answerD;

    private String trueAnswer;

    private Integer status;

    private static final long serialVersionUID = 1L;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getQuestionInfo() {
        return questionInfo;
    }

    public void setQuestionInfo(String questionInfo) {
        this.questionInfo = questionInfo == null ? null : questionInfo.trim();
    }

    public String getAnswerA() {
        return answerA;
    }

    public void setAnswerA(String answerA) {
        this.answerA = answerA == null ? null : answerA.trim();
    }

    public String getAnswerB() {
        return answerB;
    }

    public void setAnswerB(String answerB) {
        this.answerB = answerB == null ? null : answerB.trim();
    }

    public String getAnswerC() {
        return answerC;
    }

    public void setAnswerC(String answerC) {
        this.answerC = answerC == null ? null : answerC.trim();
    }

    public String getAnswerD() {
        return answerD;
    }

    public void setAnswerD(String answerD) {
        this.answerD = answerD == null ? null : answerD.trim();
    }

    public String getTrueAnswer() {
        return trueAnswer;
    }

    public void setTrueAnswer(String trueAnswer) {
        this.trueAnswer = trueAnswer == null ? null : trueAnswer.trim();
    }

    public Integer getStatus() {
        return status;
    }

    public void setStatus(Integer status) {
        this.status = status;
    }
}