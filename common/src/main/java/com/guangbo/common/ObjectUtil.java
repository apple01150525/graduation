package com.guangbo.common;


import java.util.Collection;
import java.util.Map;

/**
 * 对象判断小工具类
 * @author wangyunfeng
 *
 */
public final class ObjectUtil {

    /**
     * 判读对象是否为null
     *
     * @param object
     * @return boolean
     */
    public static boolean isNull(Object object) {
        return object == null;
    }

    /**
     * 判读对象数组中是否有null
     *
     * @param objects
     * @return boolean
     */
    public static boolean hasNull(Object... objects) {
        if (isNull(objects)) {
            return true;
        }

        for (int i = 0; i < objects.length; i++) {
            if (isNull(objects[i])) {
                return true;
            }
        }
        return false;
    }

    /**
     * 判读对象数组中是否都为null
     *
     * @param objects
     * @return boolean
     */
    public static boolean allNull(Object... objects) {
        if (isNull(objects)) {
            return true;
        }

        for (Object object : objects) {
            if (isNotNull(object)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 判读对象是否不为null
     *
     * @param object
     * @return boolean
     */
    public static boolean isNotNull(Object object) {
        return object != null;
    }

    /**
     * 判读对象是否为空 (string map list set 等包含是否为空)
     *
     * @param object
     * @return boolean
     */
    public static boolean isEmpty(Object object) {
        if (object == null) {
            return true;
        }

        if (object instanceof String) {
            if (object.equals("")) {
                return true;
            }
        } else if (object instanceof Map) {
            if (((Map<?, ?>) object).isEmpty()) {
                return true;
            }
        } else if (object instanceof Collection) {
            if (((Collection<?>) object).isEmpty()) {
                return true;
            }
        }
        return false;
    }

    /**
     * 判读对象是否不为空 (string map list set 等包含是否不为空)
     *
     * @param object 数据
     * @return boolean
     */
    public static boolean isNotEmpty(Object object) {
        return !isEmpty(object);
    }

    /**
     * 判读对象数组中是否有empty
     *
     * @param objects 数据
     * @return boolean
     */
    public static boolean hasEmpty(Object... objects) {
        if (isNull(objects)) {
            return true;
        }

        for (int i = 0; i < objects.length; i++) {
            if (isEmpty(objects[i])) {
                return true;
            }
        }
        return false;
    }

    /**
     * 判读对象数组是否是empty
     *
     * @param ts 数据
     * @return boolean
     */
    public static <T> boolean isArrayEmpty(T[] ts) {
        return isNull(ts) || ts.length == 0;
    }
}
