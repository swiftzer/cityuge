<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Category;

class StatsController extends Controller
{
    public function index()
    {
        $categories = Category::with('courses')->whereIn('slug', ['area-1', 'area-2', 'area-3'])->get()->keyBy('slug');
        $hotCourses = $categories->map(function ($category) {
            return $this->getHotCourses($category->courses, 10);
        });
        $goodGradeCourses = $categories->map(function ($category) {
            return $this->getGoodGradeCourses($category->courses, 10);
        });
        $badGradeCourses = $categories->map(function ($category) {
            return $this->getBadGradeCourses($category->courses, 10);
        });
        $lightWorkloadCourses = $categories->map(function ($category) {
            return $this->getLightWorkloadCourses($category->courses, 10);
        });
        $heavyWorkloadCourses = $categories->map(function ($category) {
            return $this->getHeavyWorkloadCourses($category->courses, 10);
        });

        $data = [
            'hotCourses' => $hotCourses,
            'goodGradeCourses' => $goodGradeCourses,
            'badGradeCourses' => $badGradeCourses,
            'lightWorkloadCourses' => $lightWorkloadCourses,
            'heavyWorkloadCourses' => $heavyWorkloadCourses,
        ];
        return view('main.stats.index', $data);
    }

    private function getHotCourses($courses, $itemsCount)
    {
        return $courses->sortByDesc('total_comments')->take($itemsCount);
    }

    private function getGoodGradeCourses($courses, $itemCount)
    {
        return $courses->filter(function ($course) {
            return $course->bayesian_gp >= 3.3;
        })->sortByDesc('bayesian_gp')->take($itemCount);
    }

    private function getBadGradeCourses($courses, $itemCount)
    {
        return $courses->filter(function ($course) {
            return $course->bayesian_gp < 3 && $course->bayesian_gp > 0;
        })->sortByDesc('bayesian_gp')->take($itemCount);
    }

    private function getLightWorkloadCourses($courses, $itemCount)
    {
        return $courses->filter(function ($course) {
            return $course->bayesian_workload <= 2.7 && $course->bayesian_workload > 0;
        })->sortBy('bayesian_gp')->take($itemCount);
    }

    private function getHeavyWorkloadCourses($courses, $itemCount)
    {
        return $courses->filter(function ($course) {
            return $course->bayesian_workload >= 3.3;
        })->sortBy('bayesian_gp')->take($itemCount);
    }
}
