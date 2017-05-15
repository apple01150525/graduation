package com.guangbo.common;

import org.springframework.util.StringUtils;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

/**
 * 时间格式化类
 *
 * @author wangyunfeng
 */
public class DateUtil {

    public static Date addYear(Date date, int year) {
        Calendar c = Calendar.getInstance();
        c.setTime(date);
        c.add(Calendar.YEAR, year);//属性很多也有月等等，可以操作各种时间日期
        return c.getTime();
    }

    public static String formatToSecond(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMMddHHmmss");
        return format.format(date);
    }

    public static String formatToDay(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMMdd");
        return format.format(date);
    }

    public static String formatToDay2(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        return format.format(date);
    }

    public static String formatToDay3(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        return format.format(date);
    }

    public static String formatToMinute(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMMddHHmm");
        return format.format(date);
    }

    public static String formatToMonth(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMM");
        return format.format(date);
    }

    public static String formatToHour(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMMddHH");
        return format.format(date);
    }

    public static String formatToYear(Date date) {
        java.text.DateFormat format = new SimpleDateFormat("yyyy");
        return format.format(date);
    }

    public static Date stringSecondToDate(String str) throws ParseException {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMMddHHmmss");
        return format.parse(str);
    }

    public static Date stringSecondToDate2(String str) throws ParseException {
        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        return format.parse(str);
    }

    public static Date stringDateToDate(String str) throws ParseException {
        java.text.DateFormat format = new SimpleDateFormat("yyyyMMdd");
        return format.parse(str);
    }

    public static Date stringDateToDate2(String str) throws ParseException {
        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        return format.parse(str);
    }

    public static Date addDay(Date date, int day) {
        Calendar c = Calendar.getInstance();
        c.setTime(date);
        c.add(Calendar.DAY_OF_YEAR, day);//属性很多也有月等等，可以操作各种时间日期
        return c.getTime();
    }

    public static String addDayFormat(Date date, int day, String mat) {
        java.text.DateFormat format = new SimpleDateFormat(mat);
        Calendar c = Calendar.getInstance();
        c.setTime(date);
        c.add(Calendar.DAY_OF_YEAR, day);//属性很多也有月等等，可以操作各种时间日期

        return format.format(c.getTime());
    }

    public static Date addMinutes(Date date, int minutes) {
        Calendar c = Calendar.getInstance();
        c.setTime(date);
        c.add(Calendar.MINUTE, minutes);//属性很多也有月等等，可以操作各种时间日期
        return c.getTime();
    }

    public static String addDayFormat0(Date date, int day) {
        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");

        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY, 0);
        c.set(Calendar.MINUTE, 0);
        c.set(Calendar.SECOND, 0);
        c.set(Calendar.MILLISECOND, 000);

        return format.format(c.getTime());
    }

    public static String addDayFormat(Date date, int day) {

        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");

        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY, 23);
        c.set(Calendar.MINUTE, 59);
        c.set(Calendar.SECOND, 59);
        c.set(Calendar.MILLISECOND, 999);

        return format.format(c.getTime());
    }

    public static String getYesterdayStart() {
        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");

        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY, 0);
        c.set(Calendar.MINUTE, 0);
        c.set(Calendar.SECOND, 0);
        c.set(Calendar.MILLISECOND, 000);

        return format.format(c.getTime());
    }

    public static String getYesterdayEnd() {

        java.text.DateFormat format = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");

        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY, 23);
        c.set(Calendar.MINUTE, 59);
        c.set(Calendar.SECOND, 59);
        c.set(Calendar.MILLISECOND, 999);

        return format.format(c.getTime());
    }

    public static Date getYesterdayStartDate() {
        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY,0);
        c.set(Calendar.MINUTE, 0);
        c.set(Calendar.SECOND, 0);
        c.set(Calendar.MILLISECOND,000);
        return c.getTime();
    }

    public static Date getYesterdayEndDate() {
        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY,23);
        c.set(Calendar.MINUTE, 59);
        c.set(Calendar.SECOND,59);
        c.set(Calendar.MILLISECOND,999);
        return c.getTime();
    }


    /**
     * 得到昨日日期
     *
     * @param date 日期
     * @return Date
     */
    public static Date getYesterdayForDay(Date date) {
        try {
            return stringDateToDate(formatToDay(addDay(date, -1)));
        } catch (ParseException e) {
            throw new RuntimeException(e);
        }
    }

    public static Date getYesterDay() {
        Calendar calendar = Calendar.getInstance();
        calendar.setTime(new Date());
        calendar.set(Calendar.DAY_OF_YEAR, calendar.get(Calendar.DAY_OF_YEAR) - 1);
        return calendar.getTime();
    }

    public static Date getStartTime(Date date) {
        if (ObjectUtil.isNull(date)) return null;
        Calendar calendar = Calendar.getInstance();
        calendar.setTime(date);
        calendar.set(Calendar.HOUR_OF_DAY, 0);
        calendar.set(Calendar.MINUTE, 0);
        calendar.set(Calendar.SECOND, 0);
        calendar.set(Calendar.MILLISECOND, 0);
        return calendar.getTime();
    }

    public static Date getEndTime(Date date) {
        Calendar calendar = Calendar.getInstance();
        calendar.setTime(date);
        calendar.set(Calendar.HOUR_OF_DAY, 23);
        calendar.set(Calendar.MINUTE, 59);
        calendar.set(Calendar.SECOND, 59);
        calendar.set(Calendar.MILLISECOND, 999);
        return calendar.getTime();
    }

    public static Date getStartTime(String strDate) {
        SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        Date date = null;
        try {
            date = simpleDateFormat.parse(strDate);
        } catch (Exception e) {
            return null;
        }
        return getStartTime(date);
    }

    public static Date getEndTime(String strDate) {
        SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        Date date = null;
        try {
            date = simpleDateFormat.parse(strDate);
        } catch (Exception e) {
            return null;
        }
        return getEndTime(date);
    }

    /**
     * 获取昨天的日期，时分秒为0
     *
     * @return
     */
    public static Date getYesterday() {

        Calendar c = Calendar.getInstance();
        c.setTime(new Date());
        c.set(Calendar.DAY_OF_YEAR, c.get(Calendar.DAY_OF_YEAR) - 1);
        c.set(Calendar.HOUR_OF_DAY, 0);
        c.set(Calendar.MINUTE, 0);
        c.set(Calendar.SECOND, 0);
        c.set(Calendar.MILLISECOND, 000);

        return c.getTime();
    }

    /**
     * 计算两
     * 个时间差
     */
    public static Long dateDiff(String startTime, String endTime) {
        if (StringUtils.isEmpty(startTime) || StringUtils.isEmpty(startTime))
            return null;
        SimpleDateFormat sd = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        long nd = 1000 * 24 * 60 * 60;// 一天的毫秒数
        long nh = 1000 * 60 * 60;// 一小时的毫秒数
        long nm = 1000 * 60;// 一分钟的毫秒数
        long ns = 1000;// 一秒钟的毫秒数
        long diff;
        long day = 0;
        long hour = 0;
        long min = 0;
        long sec = 0;
        // 获得两个时间的毫秒时间差异
        try {
            diff = sd.parse(endTime).getTime() - sd.parse(startTime).getTime();
            day = diff / nd;// 计算差多少天
            hour = diff % nd / nh + day * 24;// 计算差多少小时
            min = diff % nd % nh / nm + day * 24 * 60;// 计算差多少分钟
            sec = diff % nd % nh % nm / ns;// 计算差多少秒
            // 输出结果
        } catch (Exception e) {
            e.printStackTrace();
        }
        return hour;
    }

    public static Date getCurrentDayStartTime(Date now) {
        SimpleDateFormat longSdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        SimpleDateFormat shortSdf = new SimpleDateFormat("yyyy-MM-dd");
        SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-MM-dd");
        try {
            now = simpleDateFormat.parse(shortSdf.format(now));
        } catch (Exception e) {
            e.printStackTrace();
        }
        return now;
    }

    public static void main(String[] args) {

        System.out.println("da="+getYesterday());
    }
}
