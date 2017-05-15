package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.BloodGlucose;
import com.guangbo.dao.entity.BloodGlucoseExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface BloodGlucoseMapper {
    int countByExample(BloodGlucoseExample example);

    int deleteByExample(BloodGlucoseExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(BloodGlucose record);

    int insertSelective(BloodGlucose record);

    List<BloodGlucose> selectByExample(BloodGlucoseExample example);

    BloodGlucose selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") BloodGlucose record, @Param("example") BloodGlucoseExample example);

    int updateByExample(@Param("record") BloodGlucose record, @Param("example") BloodGlucoseExample example);

    int updateByPrimaryKeySelective(BloodGlucose record);

    int updateByPrimaryKey(BloodGlucose record);
}