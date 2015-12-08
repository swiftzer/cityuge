<?php

use CityUGE\Utils\ReviewUtil;

class ReviewUtilTest extends TestCase
{
    /**
     * Test for grade point convert function.
     *
     * @dataProvider gradePointProvider
     * @param $grade
     * @param $expectedGradePoint
     */
    public function testGetGradePointByLetterGrade($grade, $expectedGradePoint)
    {
        $result = ReviewUtil::getGradePointByLetterGrade($grade);
        $this->assertEquals($expectedGradePoint, $result);
    }

    public function gradePointProvider()
    {
        return [
            ['A+', 4.3],
            ['A', 4],
            ['A-', 3.7],
            ['B+', 3.3],
            ['B', 3],
            ['B-', 2.7],
            ['C+', 2.3],
            ['C', 2],
            ['C-', 1.7],
            ['D', 1],
            ['F', 0],
        ];
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testGetGradePointByLetterGradeWithInvalidInput()
    {
        ReviewUtil::getGradePointByLetterGrade('H');
    }

}
