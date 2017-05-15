package com.guangbo.common;

/**
 * Created by gaoguangbo on 2017/5/14.
 */
public class WebResult {
    String code;
    String  msg;
    Object result;

    public String getCode() {
        return code;
    }

    public void setCode(String code) {
        this.code = code;
    }

    public String getMsg() {
        return msg;
    }

    public void setMsg(String msg) {
        this.msg = msg;
    }

    public Object getResult() {
        return result;
    }

    public void setResult(Object result) {
        this.result = result;
    }
}
