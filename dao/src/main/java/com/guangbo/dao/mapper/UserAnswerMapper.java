package com.guangbo.dao.mapper;

import com.guangbo.dao.entity.UserAnswer;
import com.guangbo.dao.entity.UserAnswerExample;
import java.util.List;
import org.apache.ibatis.annotations.Param;

public interface UserAnswerMapper {
    int countByExample(UserAnswerExample example);

    int deleteByExample(UserAnswerExample example);

    int insert(UserAnswer record);

    int insertSelective(UserAnswer record);

    List<UserAnswer> selectByExample(UserAnswerExample example);

    int updateByExampleSelective(@Param("record") UserAnswer record, @Param("example") UserAnswerExample example);

    int updateByExample(@Param("record") UserAnswer record, @Param("example") UserAnswerExample example);
}