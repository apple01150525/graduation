package com.guangbo.dao.entity;

import java.util.ArrayList;
import java.util.List;

public class UserAnswerExample {
    protected String orderByClause;

    protected boolean distinct;

    protected List<Criteria> oredCriteria;

    public UserAnswerExample() {
        oredCriteria = new ArrayList<Criteria>();
    }

    public void setOrderByClause(String orderByClause) {
        this.orderByClause = orderByClause;
    }

    public String getOrderByClause() {
        return orderByClause;
    }

    public void setDistinct(boolean distinct) {
        this.distinct = distinct;
    }

    public boolean isDistinct() {
        return distinct;
    }

    public List<Criteria> getOredCriteria() {
        return oredCriteria;
    }

    public void or(Criteria criteria) {
        oredCriteria.add(criteria);
    }

    public Criteria or() {
        Criteria criteria = createCriteriaInternal();
        oredCriteria.add(criteria);
        return criteria;
    }

    public Criteria createCriteria() {
        Criteria criteria = createCriteriaInternal();
        if (oredCriteria.size() == 0) {
            oredCriteria.add(criteria);
        }
        return criteria;
    }

    protected Criteria createCriteriaInternal() {
        Criteria criteria = new Criteria();
        return criteria;
    }

    public void clear() {
        oredCriteria.clear();
        orderByClause = null;
        distinct = false;
    }

    protected abstract static class GeneratedCriteria {
        protected List<Criterion> criteria;

        protected GeneratedCriteria() {
            super();
            criteria = new ArrayList<Criterion>();
        }

        public boolean isValid() {
            return criteria.size() > 0;
        }

        public List<Criterion> getAllCriteria() {
            return criteria;
        }

        public List<Criterion> getCriteria() {
            return criteria;
        }

        protected void addCriterion(String condition) {
            if (condition == null) {
                throw new RuntimeException("Value for condition cannot be null");
            }
            criteria.add(new Criterion(condition));
        }

        protected void addCriterion(String condition, Object value, String property) {
            if (value == null) {
                throw new RuntimeException("Value for " + property + " cannot be null");
            }
            criteria.add(new Criterion(condition, value));
        }

        protected void addCriterion(String condition, Object value1, Object value2, String property) {
            if (value1 == null || value2 == null) {
                throw new RuntimeException("Between values for " + property + " cannot be null");
            }
            criteria.add(new Criterion(condition, value1, value2));
        }

        public Criteria andIdIsNull() {
            addCriterion("id is null");
            return (Criteria) this;
        }

        public Criteria andIdIsNotNull() {
            addCriterion("id is not null");
            return (Criteria) this;
        }

        public Criteria andIdEqualTo(Integer value) {
            addCriterion("id =", value, "id");
            return (Criteria) this;
        }

        public Criteria andIdNotEqualTo(Integer value) {
            addCriterion("id <>", value, "id");
            return (Criteria) this;
        }

        public Criteria andIdGreaterThan(Integer value) {
            addCriterion("id >", value, "id");
            return (Criteria) this;
        }

        public Criteria andIdGreaterThanOrEqualTo(Integer value) {
            addCriterion("id >=", value, "id");
            return (Criteria) this;
        }

        public Criteria andIdLessThan(Integer value) {
            addCriterion("id <", value, "id");
            return (Criteria) this;
        }

        public Criteria andIdLessThanOrEqualTo(Integer value) {
            addCriterion("id <=", value, "id");
            return (Criteria) this;
        }

        public Criteria andIdIn(List<Integer> values) {
            addCriterion("id in", values, "id");
            return (Criteria) this;
        }

        public Criteria andIdNotIn(List<Integer> values) {
            addCriterion("id not in", values, "id");
            return (Criteria) this;
        }

        public Criteria andIdBetween(Integer value1, Integer value2) {
            addCriterion("id between", value1, value2, "id");
            return (Criteria) this;
        }

        public Criteria andIdNotBetween(Integer value1, Integer value2) {
            addCriterion("id not between", value1, value2, "id");
            return (Criteria) this;
        }

        public Criteria andUserIdIsNull() {
            addCriterion("user_id is null");
            return (Criteria) this;
        }

        public Criteria andUserIdIsNotNull() {
            addCriterion("user_id is not null");
            return (Criteria) this;
        }

        public Criteria andUserIdEqualTo(Integer value) {
            addCriterion("user_id =", value, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdNotEqualTo(Integer value) {
            addCriterion("user_id <>", value, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdGreaterThan(Integer value) {
            addCriterion("user_id >", value, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdGreaterThanOrEqualTo(Integer value) {
            addCriterion("user_id >=", value, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdLessThan(Integer value) {
            addCriterion("user_id <", value, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdLessThanOrEqualTo(Integer value) {
            addCriterion("user_id <=", value, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdIn(List<Integer> values) {
            addCriterion("user_id in", values, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdNotIn(List<Integer> values) {
            addCriterion("user_id not in", values, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdBetween(Integer value1, Integer value2) {
            addCriterion("user_id between", value1, value2, "userId");
            return (Criteria) this;
        }

        public Criteria andUserIdNotBetween(Integer value1, Integer value2) {
            addCriterion("user_id not between", value1, value2, "userId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdIsNull() {
            addCriterion("choose_question_id is null");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdIsNotNull() {
            addCriterion("choose_question_id is not null");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdEqualTo(Integer value) {
            addCriterion("choose_question_id =", value, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdNotEqualTo(Integer value) {
            addCriterion("choose_question_id <>", value, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdGreaterThan(Integer value) {
            addCriterion("choose_question_id >", value, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdGreaterThanOrEqualTo(Integer value) {
            addCriterion("choose_question_id >=", value, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdLessThan(Integer value) {
            addCriterion("choose_question_id <", value, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdLessThanOrEqualTo(Integer value) {
            addCriterion("choose_question_id <=", value, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdIn(List<Integer> values) {
            addCriterion("choose_question_id in", values, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdNotIn(List<Integer> values) {
            addCriterion("choose_question_id not in", values, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdBetween(Integer value1, Integer value2) {
            addCriterion("choose_question_id between", value1, value2, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andChooseQuestionIdNotBetween(Integer value1, Integer value2) {
            addCriterion("choose_question_id not between", value1, value2, "chooseQuestionId");
            return (Criteria) this;
        }

        public Criteria andAnswerIsNull() {
            addCriterion("answer is null");
            return (Criteria) this;
        }

        public Criteria andAnswerIsNotNull() {
            addCriterion("answer is not null");
            return (Criteria) this;
        }

        public Criteria andAnswerEqualTo(String value) {
            addCriterion("answer =", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerNotEqualTo(String value) {
            addCriterion("answer <>", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerGreaterThan(String value) {
            addCriterion("answer >", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerGreaterThanOrEqualTo(String value) {
            addCriterion("answer >=", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerLessThan(String value) {
            addCriterion("answer <", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerLessThanOrEqualTo(String value) {
            addCriterion("answer <=", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerLike(String value) {
            addCriterion("answer like", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerNotLike(String value) {
            addCriterion("answer not like", value, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerIn(List<String> values) {
            addCriterion("answer in", values, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerNotIn(List<String> values) {
            addCriterion("answer not in", values, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerBetween(String value1, String value2) {
            addCriterion("answer between", value1, value2, "answer");
            return (Criteria) this;
        }

        public Criteria andAnswerNotBetween(String value1, String value2) {
            addCriterion("answer not between", value1, value2, "answer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerIsNull() {
            addCriterion("true_answer is null");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerIsNotNull() {
            addCriterion("true_answer is not null");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerEqualTo(String value) {
            addCriterion("true_answer =", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerNotEqualTo(String value) {
            addCriterion("true_answer <>", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerGreaterThan(String value) {
            addCriterion("true_answer >", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerGreaterThanOrEqualTo(String value) {
            addCriterion("true_answer >=", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerLessThan(String value) {
            addCriterion("true_answer <", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerLessThanOrEqualTo(String value) {
            addCriterion("true_answer <=", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerLike(String value) {
            addCriterion("true_answer like", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerNotLike(String value) {
            addCriterion("true_answer not like", value, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerIn(List<String> values) {
            addCriterion("true_answer in", values, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerNotIn(List<String> values) {
            addCriterion("true_answer not in", values, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerBetween(String value1, String value2) {
            addCriterion("true_answer between", value1, value2, "trueAnswer");
            return (Criteria) this;
        }

        public Criteria andTrueAnswerNotBetween(String value1, String value2) {
            addCriterion("true_answer not between", value1, value2, "trueAnswer");
            return (Criteria) this;
        }
    }

    public static class Criteria extends GeneratedCriteria {

        protected Criteria() {
            super();
        }
    }

    public static class Criterion {
        private String condition;

        private Object value;

        private Object secondValue;

        private boolean noValue;

        private boolean singleValue;

        private boolean betweenValue;

        private boolean listValue;

        private String typeHandler;

        public String getCondition() {
            return condition;
        }

        public Object getValue() {
            return value;
        }

        public Object getSecondValue() {
            return secondValue;
        }

        public boolean isNoValue() {
            return noValue;
        }

        public boolean isSingleValue() {
            return singleValue;
        }

        public boolean isBetweenValue() {
            return betweenValue;
        }

        public boolean isListValue() {
            return listValue;
        }

        public String getTypeHandler() {
            return typeHandler;
        }

        protected Criterion(String condition) {
            super();
            this.condition = condition;
            this.typeHandler = null;
            this.noValue = true;
        }

        protected Criterion(String condition, Object value, String typeHandler) {
            super();
            this.condition = condition;
            this.value = value;
            this.typeHandler = typeHandler;
            if (value instanceof List<?>) {
                this.listValue = true;
            } else {
                this.singleValue = true;
            }
        }

        protected Criterion(String condition, Object value) {
            this(condition, value, null);
        }

        protected Criterion(String condition, Object value, Object secondValue, String typeHandler) {
            super();
            this.condition = condition;
            this.value = value;
            this.secondValue = secondValue;
            this.typeHandler = typeHandler;
            this.betweenValue = true;
        }

        protected Criterion(String condition, Object value, Object secondValue) {
            this(condition, value, secondValue, null);
        }
    }
}