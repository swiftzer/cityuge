<?php

namespace CityUGE\Entities;

use DB;

class Filter
{
    //this entity doesn't relate to any table
    //string
    private $keyword, $semester, $department, $category;
    //integer
    private $page;
    // yes / no / don't care
    private $hasExam, $hasQuiz, $hasReport, $hasProject;
    
    function __construct($query) 
    {
        $this->setKeyword(array_get($query, 'keyword', ''));
        $this->setSemester(array_get($query, 'semester', ''));
        $this->setDepartment(array_get($query, 'department', ''));
        $this->setCategory(array_get($query, 'category', ''));
        $this->setPageNo(array_get($query, 'page', '1'));
        $this->setHasExam(array_get($query, 'exam', ''));
        $this->setHasQuiz(array_get($query, 'quiz', ''));
        $this->setHasReport(array_get($query, 'report', ''));
        $this->setHasProject(array_get($query, 'project', ''));
    }

    private function sanitizeString($input)
    {
        return empty($input) ? null : $input;
    }

    private function sanitizeBool($input)
    {
        return empty($input) ? null : ($input != '0');
    }

    private function sanitizeInteger($input)
    {
        return intval($input);
    }

    private function setKeyword($keyword)
    {
        $this->keyword = $this->sanitizeString($keyword);
    }

    private function setSemester($semester)
    {
        $this->semester = $this->sanitizeString($semester);
    }

    private function setDepartment($deptSlug)
    {
        $slug = $this->sanitizeString($deptSlug);
        $this->department = Department::where('initial', $slug)->first();
    }

    private function setCategory($categorySlug)
    {
        $slug = $this->sanitizeString($categorySlug);
        $this->category = Category::where('slug', $slug)->first();
    }

    private function setPageNo($page)
    {
        $this->page = max(1, $this->sanitizeInteger($page));
    }

    private function setHasExam($hasExam)
    {
        $this->hasExam = $this->sanitizeBool($hasExam);
    }

    private function setHasQuiz($hasQuiz)
    {
        $this->hasQuiz = $this->sanitizeBool($hasQuiz);
    }

    private function setHasReport($hasReport)
    {
        $this->hasReport = $this->sanitizeBool($hasReport);
    }

    private function setHasProject($hasProject)
    {
        $this->hasProject = $this->sanitizeBool($hasProject);
    }

    public function getQueryBuilder()
    {
        $whereClauses = [];
        $queryBuilder = DB::table('courses');
        if(isset($this->keyword))
        {
            $queryBuilder->where(function($q) {
                $q->where('course_code', $this->keyword);
                $q->orWhere('title_en', 'like', '%'.$this->keyword.'%');
                $q->orWhere('title_zh', 'like', '%'.$this->keyword.'%');
            });
        }
        if(isset($this->department))
        {
            $queryBuilder->where('department_id', $this->department->id);
        }
        if(isset($this->category))
        {
            $queryBuilder->whereExists(function($q) {
                $q->select(DB::raw(1))
                ->from('category_course')
                ->where('category_course.category_id', $this->category->id)
                ->whereRaw('category_course.course_id = courses.id');
            });
        }
        if(isset($this->semester))
        {
            $queryBuilder->whereExists(function($q) {
                $q->select(DB::raw(1))
                ->from('offerings')
                ->where('offerings.semester', $this->semester)
                ->whereRaw('offerings.course_id = courses.id');
            });
        }
        if(isset($this->hasExam))
        {
            $queryBuilder->where('assessment_exam', $this->hasExam?'1':'0');
        }
        if(isset($this->hasQuiz))
        {
            $queryBuilder->where('assessment_quiz', $this->hasQuiz?'1':'0');
        }
        if(isset($this->hasReport))
        {
            $queryBuilder->where('assessment_report', $this->hasReport?'1':'0');
        }
        if(isset($this->hasProject))
        {
            $queryBuilder->where('assessment_project', $this->hasProject?'1':'0');
        }
        return $queryBuilder;
    }
}
