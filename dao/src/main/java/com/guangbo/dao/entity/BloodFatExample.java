package com.guangbo.dao.entity;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class BloodFatExample {
    protected String orderByClause;

    protected boolean distinct;

    protected List<Criteria> oredCriteria;

    public BloodFatExample() {
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

        public Criteria andCholesterolIsNull() {
            addCriterion("cholesterol is null");
            return (Criteria) this;
        }

        public Criteria andCholesterolIsNotNull() {
            addCriterion("cholesterol is not null");
            return (Criteria) this;
        }

        public Criteria andCholesterolEqualTo(Integer value) {
            addCriterion("cholesterol =", value, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolNotEqualTo(Integer value) {
            addCriterion("cholesterol <>", value, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolGreaterThan(Integer value) {
            addCriterion("cholesterol >", value, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolGreaterThanOrEqualTo(Integer value) {
            addCriterion("cholesterol >=", value, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolLessThan(Integer value) {
            addCriterion("cholesterol <", value, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolLessThanOrEqualTo(Integer value) {
            addCriterion("cholesterol <=", value, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolIn(List<Integer> values) {
            addCriterion("cholesterol in", values, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolNotIn(List<Integer> values) {
            addCriterion("cholesterol not in", values, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolBetween(Integer value1, Integer value2) {
            addCriterion("cholesterol between", value1, value2, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andCholesterolNotBetween(Integer value1, Integer value2) {
            addCriterion("cholesterol not between", value1, value2, "cholesterol");
            return (Criteria) this;
        }

        public Criteria andTriglycerideIsNull() {
            addCriterion("triglyceride is null");
            return (Criteria) this;
        }

        public Criteria andTriglycerideIsNotNull() {
            addCriterion("triglyceride is not null");
            return (Criteria) this;
        }

        public Criteria andTriglycerideEqualTo(Integer value) {
            addCriterion("triglyceride =", value, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideNotEqualTo(Integer value) {
            addCriterion("triglyceride <>", value, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideGreaterThan(Integer value) {
            addCriterion("triglyceride >", value, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideGreaterThanOrEqualTo(Integer value) {
            addCriterion("triglyceride >=", value, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideLessThan(Integer value) {
            addCriterion("triglyceride <", value, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideLessThanOrEqualTo(Integer value) {
            addCriterion("triglyceride <=", value, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideIn(List<Integer> values) {
            addCriterion("triglyceride in", values, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideNotIn(List<Integer> values) {
            addCriterion("triglyceride not in", values, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideBetween(Integer value1, Integer value2) {
            addCriterion("triglyceride between", value1, value2, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andTriglycerideNotBetween(Integer value1, Integer value2) {
            addCriterion("triglyceride not between", value1, value2, "triglyceride");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolIsNull() {
            addCriterion("high_cholesterol is null");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolIsNotNull() {
            addCriterion("high_cholesterol is not null");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolEqualTo(Integer value) {
            addCriterion("high_cholesterol =", value, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolNotEqualTo(Integer value) {
            addCriterion("high_cholesterol <>", value, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolGreaterThan(Integer value) {
            addCriterion("high_cholesterol >", value, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolGreaterThanOrEqualTo(Integer value) {
            addCriterion("high_cholesterol >=", value, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolLessThan(Integer value) {
            addCriterion("high_cholesterol <", value, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolLessThanOrEqualTo(Integer value) {
            addCriterion("high_cholesterol <=", value, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolIn(List<Integer> values) {
            addCriterion("high_cholesterol in", values, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolNotIn(List<Integer> values) {
            addCriterion("high_cholesterol not in", values, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolBetween(Integer value1, Integer value2) {
            addCriterion("high_cholesterol between", value1, value2, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andHighCholesterolNotBetween(Integer value1, Integer value2) {
            addCriterion("high_cholesterol not between", value1, value2, "highCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolIsNull() {
            addCriterion("low_cholesterol is null");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolIsNotNull() {
            addCriterion("low_cholesterol is not null");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolEqualTo(Integer value) {
            addCriterion("low_cholesterol =", value, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolNotEqualTo(Integer value) {
            addCriterion("low_cholesterol <>", value, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolGreaterThan(Integer value) {
            addCriterion("low_cholesterol >", value, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolGreaterThanOrEqualTo(Integer value) {
            addCriterion("low_cholesterol >=", value, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolLessThan(Integer value) {
            addCriterion("low_cholesterol <", value, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolLessThanOrEqualTo(Integer value) {
            addCriterion("low_cholesterol <=", value, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolIn(List<Integer> values) {
            addCriterion("low_cholesterol in", values, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolNotIn(List<Integer> values) {
            addCriterion("low_cholesterol not in", values, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolBetween(Integer value1, Integer value2) {
            addCriterion("low_cholesterol between", value1, value2, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andLowCholesterolNotBetween(Integer value1, Integer value2) {
            addCriterion("low_cholesterol not between", value1, value2, "lowCholesterol");
            return (Criteria) this;
        }

        public Criteria andTimeIsNull() {
            addCriterion("time is null");
            return (Criteria) this;
        }

        public Criteria andTimeIsNotNull() {
            addCriterion("time is not null");
            return (Criteria) this;
        }

        public Criteria andTimeEqualTo(Date value) {
            addCriterion("time =", value, "time");
            return (Criteria) this;
        }

        public Criteria andTimeNotEqualTo(Date value) {
            addCriterion("time <>", value, "time");
            return (Criteria) this;
        }

        public Criteria andTimeGreaterThan(Date value) {
            addCriterion("time >", value, "time");
            return (Criteria) this;
        }

        public Criteria andTimeGreaterThanOrEqualTo(Date value) {
            addCriterion("time >=", value, "time");
            return (Criteria) this;
        }

        public Criteria andTimeLessThan(Date value) {
            addCriterion("time <", value, "time");
            return (Criteria) this;
        }

        public Criteria andTimeLessThanOrEqualTo(Date value) {
            addCriterion("time <=", value, "time");
            return (Criteria) this;
        }

        public Criteria andTimeIn(List<Date> values) {
            addCriterion("time in", values, "time");
            return (Criteria) this;
        }

        public Criteria andTimeNotIn(List<Date> values) {
            addCriterion("time not in", values, "time");
            return (Criteria) this;
        }

        public Criteria andTimeBetween(Date value1, Date value2) {
            addCriterion("time between", value1, value2, "time");
            return (Criteria) this;
        }

        public Criteria andTimeNotBetween(Date value1, Date value2) {
            addCriterion("time not between", value1, value2, "time");
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