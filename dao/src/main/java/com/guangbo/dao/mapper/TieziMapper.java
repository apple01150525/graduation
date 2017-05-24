package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.Tiezi;
import com.guangbo.dao.entity.TieziExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface TieziMapper {
    int countByExample(TieziExample example);

    int deleteByExample(TieziExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(Tiezi record);

    int insertSelective(Tiezi record);

    List<Tiezi> selectByExampleWithBLOBs(TieziExample example);

    List<Tiezi> selectByExample(TieziExample example);

    Tiezi selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") Tiezi record, @Param("example") TieziExample example);

    int updateByExampleWithBLOBs(@Param("record") Tiezi record, @Param("example") TieziExample example);

    int updateByExample(@Param("record") Tiezi record, @Param("example") TieziExample example);

    int updateByPrimaryKeySelective(Tiezi record);

    int updateByPrimaryKeyWithBLOBs(Tiezi record);

    int updateByPrimaryKey(Tiezi record);
}