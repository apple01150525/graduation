package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.TieziType;
import com.guangbo.dao.entity.TieziTypeExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface TieziTypeMapper {
    int countByExample(TieziTypeExample example);

    int deleteByExample(TieziTypeExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(TieziType record);

    int insertSelective(TieziType record);

    List<TieziType> selectByExample(TieziTypeExample example);

    TieziType selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") TieziType record, @Param("example") TieziTypeExample example);

    int updateByExample(@Param("record") TieziType record, @Param("example") TieziTypeExample example);

    int updateByPrimaryKeySelective(TieziType record);

    int updateByPrimaryKey(TieziType record);
}