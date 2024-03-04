<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRecordRequest;
use App\Models\Lesson;
use App\Models\LessonRecord;

class LessonRecordController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonRecordRequest $request, Lesson $lesson)
    {
        $lesson->records()->create($request->validated());

        return redirect()->route('lessons.show', $lesson);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LessonRecordRequest $request, LessonRecord $lessonRecord)
    {
        $lessonRecord->update($request->validated());

        return redirect()->route('lessons.show', $lessonRecord->lesson);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LessonRecord $lessonRecord)
    {
        $lessonRecord->delete();

        return redirect()->route('lessons.show', $lessonRecord->lesson);
    }
}
