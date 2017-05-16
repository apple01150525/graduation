package com.guangbo.controller;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONObject;
import com.guangbo.dao.entity.CQ;
import com.guangbo.dao.entity.ChooseQuestion;
import com.guangbo.dao.entity.UserAnswer;
import com.guangbo.service.IPaperService;
import com.guangbo.service.IUserAnswerService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;

import javax.servlet.http.HttpServletRequest;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * Created by huanyan on 2017/5/15.
 */
@Controller
@RequestMapping("/paper")
public class PaperController {
    @Autowired
    private IPaperService paperService;

    @Autowired
    private IUserAnswerService userAnswerService;

    @ResponseBody
    @RequestMapping(value = "/getQuestions" , produces = "application/json;charset=UTF-8")
    public String getNews(HttpServletRequest request) {
        List<ChooseQuestion> chooseQuestions = paperService.query(new ChooseQuestion());
        CQ cq = new CQ();
        cq.setCount(chooseQuestions.size());
        cq.setChooseQuestions(chooseQuestions);
        String json = JSON.toJSONString(cq);
        return json;
    }

    @RequestMapping(value = "/saveAnswer" , produces = "application/json;charset=UTF-8")
    public String getNews(HttpServletRequest request, Model model,String data) {
        //int userId = Integer.valueOf(request.getSession().getAttribute("user").getId());
        int userId = 1;
        List<UserAnswer> userAnswers = new ArrayList<UserAnswer>();
        userAnswers = JSONObject.parseArray(data ,UserAnswer.class);
        for(UserAnswer userAnswer : userAnswers){
            userAnswer.setUserId(userId);
            ChooseQuestion chooseQuestion = new ChooseQuestion();
            chooseQuestion.setId(userAnswer.getChooseQuestionId());
            List<ChooseQuestion> list = paperService.query(chooseQuestion);
            userAnswer.setTrueAnswer(list.get(0).getTrueAnswer());
            userAnswerService.insert(userAnswer);
        }
        return "question";
    }
}
