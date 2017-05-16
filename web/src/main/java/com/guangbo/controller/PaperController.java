package com.guangbo.controller;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONObject;
import com.guangbo.dao.entity.ChooseQuestion;
import com.guangbo.dao.entity.UserAnswer;
import com.guangbo.service.IPaperService;
import com.guangbo.service.IUserAnswerService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import javax.servlet.http.HttpServletRequest;
import java.util.ArrayList;
import java.util.List;

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

    @RequestMapping("/getQuestions")
    public String getNews( Model model) {
        List<ChooseQuestion> chooseQuestions = paperService.query(new ChooseQuestion());
        model.addAttribute("questions",chooseQuestions);
        return "question";
    }

    @RequestMapping("/saveAnswer")
    public String getNews(HttpServletRequest request, Model model,String data) {
        //int userId = Integer.valueOf(request.getSession().getAttribute("user").getId());
        int userId = 1;
        List<UserAnswer> userAnswers = new ArrayList<UserAnswer>();
        data = "[{'chooseQuestionId' : 1 , 'answer' :'a'},{'chooseQuestionId' : 2 ,'answer' : 'b'}]";
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
