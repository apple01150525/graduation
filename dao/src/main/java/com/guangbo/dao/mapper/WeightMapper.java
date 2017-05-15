package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.Weight;
import com.guangbo.dao.entity.WeightExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface WeightMapper {
    int countByExample(WeightExample example);

    int deleteByExample(WeightExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(Weight record);

    int insertSelective(Weight record);

    List<Weight> selectByExample(WeightExample example);

    Weight selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") Weight record, @Param("example") WeightExample example);

    int updateByExample(@Param("record") Weight record, @Param("example") WeightExample example);

    int updateByPrimaryKeySelective(Weight record);

    int updateByPrimaryKey(Weight record);
}