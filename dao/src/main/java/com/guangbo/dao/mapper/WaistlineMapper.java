package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.Waistline;
import com.guangbo.dao.entity.WaistlineExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface WaistlineMapper {
    int countByExample(WaistlineExample example);

    int deleteByExample(WaistlineExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(Waistline record);

    int insertSelective(Waistline record);

    List<Waistline> selectByExample(WaistlineExample example);

    Waistline selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") Waistline record, @Param("example") WaistlineExample example);

    int updateByExample(@Param("record") Waistline record, @Param("example") WaistlineExample example);

    int updateByPrimaryKeySelective(Waistline record);

    int updateByPrimaryKey(Waistline record);
}