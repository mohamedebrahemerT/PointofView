<?php

namespace App\Observers;

use App\Models\Course;
use App\Models\Department;

class CourseObserver
{
    /**
     * Handle the Course "created" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function created(Course $course)
    {
        $department = Department::where('id',$course->department_id)->first();
        if ($department){
            $department->courses_count += 1;
            $department->save();
        }
    }

    /**
     * Handle the Course "updating" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function updating(Course $course)
    {
        if($course->isDirty('department_id')){
            // email has changed
            $new_department = Department::find($course->department_id);
            if ($new_department){
                $new_department->courses_count += 1;
                $new_department->save();
            }
            $old_department = Department::find($course->getOriginal('department_id'));
            if ($old_department && $old_department->courses_count > 0){
                $old_department->courses_count -= 1;
                $old_department->save();
            }


        }
    }

    /**
     * Handle the Course "updated" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function updated(Course $course)
    {
        //
    }

    /**
     * Handle the Course "deleted" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function deleted(Course $course)
    {
        $department = Department::find($course->department_id);
        if ($department && $department->courses_count > 0){
            $department->courses_count -= 1;
            $department->save();
        }
    }

    /**
     * Handle the Course "restored" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function restored(Course $course)
    {
        //
    }

    /**
     * Handle the Course "force deleted" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function forceDeleted(Course $course)
    {
        //
    }
}
