package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.ChooseQuestion;
import com.guangbo.dao.entity.ChooseQuestionExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface ChooseQuestionMapper {
    int countByExample(ChooseQuestionExample example);

    int deleteByExample(ChooseQuestionExample example);

    int deleteByPrimaryKey(Integer id);

    int insert(ChooseQuestion record);

    int insertSelective(ChooseQuestion record);

    List<ChooseQuestion> selectByExample(ChooseQuestionExample example);

    ChooseQuestion selectByPrimaryKey(Integer id);

    int updateByExampleSelective(@Param("record") ChooseQuestion record, @Param("example") ChooseQuestionExample example);

    int updateByExample(@Param("record") ChooseQuestion record, @Param("example") ChooseQuestionExample example);

    int updateByPrimaryKeySelective(ChooseQuestion record);

    int updateByPrimaryKey(ChooseQuestion record);
}