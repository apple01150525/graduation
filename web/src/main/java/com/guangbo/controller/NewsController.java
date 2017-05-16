package com.guangbo.controller;

import com.guangbo.common.DateUtil;
import com.guangbo.common.WebResult;
import com.guangbo.dao.entity.*;
import com.guangbo.service.*;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.util.ObjectUtils;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import java.util.Date;
import java.util.LinkedList;
import java.util.List;

/**
 * Created by gaoguangbo on 2017/5/10.
 */
@Controller
@RequestMapping("/api")
public class NewsController {
    @Autowired
    private IWeightService weightService;
    @Autowired
    private IBloodFatService bloodFatService;
    @Autowired
    private IBloodGlucoseService bloodGlucoseService;
    @Autowired
    private ITemperatureService temperatureService;
    @Autowired
    private IWaistlineService waistlineService;

    @RequestMapping(value = "/add/weight", produces = "application/json;charset=UTF-8")
    @ResponseBody
    public WebResult addWeight(Weight weight) {
        WebResult webResult = new WebResult();
        webResult.setCode("01");
        webResult.setMsg("失败");
        String nowDate = DateUtil.formatToDay2(new Date());
        weight.setTime(nowDate);
        int i = weightService.update(weight);
        //如果更新成功，说明今天有记录，更新即可
        if (i == 0) {
            i = weightService.insert(weight);
            if (i == 0) {
                return webResult;
            }
        }
        webResult.setCode("00");
        webResult.setMsg("成功");
        return webResult;
    }

    @RequestMapping(value = "/add/bloodfat", produces = "application/json;charset=UTF-8")
    @ResponseBody
    public WebResult addBloodFat(BloodFat bloodFat) {
        WebResult webResult = new WebResult();
        webResult.setCode("01");
        webResult.setMsg("失败");
        String nowDate = DateUtil.formatToDay2(new Date());
        bloodFat.setTime(nowDate);
        int i = bloodFatService.update(bloodFat);
        //如果更新成功，说明今天有记录，更新即可
        if (i == 0) {
            i = bloodFatService.insert(bloodFat);
            if (i == 0) {
                return webResult;
            }
        }

        webResult.setCode("00");
        webResult.setMsg("成功");

        return webResult;
    }

    @RequestMapping(value = "/add/temper", produces = "application/json;charset=UTF-8")
    @ResponseBody
    public WebResult addTemperature(Temperature temperature) {
        WebResult webResult = new WebResult();
        webResult.setCode("01");
        webResult.setMsg("失败");
        if (ObjectUtils.isEmpty(temperature.getTemper())) {
            return webResult;
        }
        String nowDate = DateUtil.formatToDay2(new Date());
        temperature.setTime(nowDate);
        int i = temperatureService.update(temperature);
        //如果更新成功，说明今天有记录，更新即可
        if (i == 0) {
            i = temperatureService.insert(temperature);
            if (i == 0) {
                return webResult;
            }
        }

        webResult.setCode("00");
        webResult.setMsg("成功");
        return webResult;
    }

    @RequestMapping(value = "/add/bloodglucose", produces = "application/json;charset=UTF-8")
    @ResponseBody
    public WebResult addBloodglucose(BloodGlucose bloodGlucose) {
        WebResult webResult = new WebResult();
        webResult.setCode("01");
        webResult.setMsg("失败");
        String nowDate = DateUtil.formatToDay2(new Date());
        bloodGlucose.setTime(nowDate);
        int i = bloodGlucoseService.update(bloodGlucose);
        //如果更新成功，说明今天有记录，更新即可
        if (i == 0) {
            i = bloodGlucoseService.insert(bloodGlucose);
            if (i == 0) {
                return webResult;
            }
        }

        webResult.setCode("00");
        webResult.setMsg("成功");
        return webResult;
    }

    @RequestMapping(value = "/get/{type}", produces = "application/json;charset=UTF-8")
    @ResponseBody
    public WebResult getBloodglucose(@PathVariable String type) {
        WebResult webResult = new WebResult();
        webResult.setCode("01");
        webResult.setMsg("失败");

        if (type.equals("weight")) {
            Weight weight = new Weight();
            List<Weight> weights = weightService.query(weight);
            webResult.setCode("00");
            webResult.setMsg("成功");
            webResult.setResult(weights);
            return webResult;
        }
        if(type.equals("bloodfat")) {
            BloodFat bloodfat = new BloodFat();
            List<BloodFat> bloodFats = bloodFatService.query(bloodfat);
            webResult.setCode("00");
            webResult.setMsg("成功");
            webResult.setResult(bloodFats);
            return webResult;
        }
        if(type.equals("temper")) {
            Temperature temperature = new Temperature();
            List<Temperature> temperatures = temperatureService.query(temperature);
            webResult.setCode("00");
            webResult.setMsg("成功");
            webResult.setResult(temperatures);
            return webResult;
        }
        if(type.equals("bloodglucose")) {
            BloodGlucose bloodglucose = new BloodGlucose();
            List<BloodGlucose> bloodGlucose = bloodGlucoseService.query(bloodglucose);
            webResult.setCode("00");
            webResult.setMsg("成功");
            webResult.setResult(bloodGlucose);
            return webResult;
        }

        return webResult;
    }

    @RequestMapping("/index")
    public String index() {
        return "index";
    }


}
