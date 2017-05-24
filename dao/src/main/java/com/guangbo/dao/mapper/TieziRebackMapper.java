package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.TieziReback;
import com.guangbo.dao.entity.TieziRebackExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface TieziRebackMapper {
    int countByExample(TieziRebackExample example);

    int deleteByExample(TieziRebackExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(TieziReback record);

    int insertSelective(TieziReback record);

    List<TieziReback> selectByExampleWithBLOBs(TieziRebackExample example);

    List<TieziReback> selectByExample(TieziRebackExample example);

    TieziReback selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") TieziReback record, @Param("example") TieziRebackExample example);

    int updateByExampleWithBLOBs(@Param("record") TieziReback record, @Param("example") TieziRebackExample example);

    int updateByExample(@Param("record") TieziReback record, @Param("example") TieziRebackExample example);

    int updateByPrimaryKeySelective(TieziReback record);

    int updateByPrimaryKeyWithBLOBs(TieziReback record);

    int updateByPrimaryKey(TieziReback record);
}