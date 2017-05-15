package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.BloodFat;
import com.guangbo.dao.entity.BloodFatExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface BloodFatMapper {
    int countByExample(BloodFatExample example);

    int deleteByExample(BloodFatExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(BloodFat record);

    int insertSelective(BloodFat record);

    List<BloodFat> selectByExample(BloodFatExample example);

    BloodFat selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") BloodFat record, @Param("example") BloodFatExample example);

    int updateByExample(@Param("record") BloodFat record, @Param("example") BloodFatExample example);

    int updateByPrimaryKeySelective(BloodFat record);

    int updateByPrimaryKey(BloodFat record);
}