<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed question_level_id
 * @property mixed chapter_id
 * @property mixed question_type_id
 * @property mixed subject_id
 * @property mixed question
 */
class QuestionOptionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'questionId' => $this->id,
            'questionLevelId' => $this->question_level_id,
            'chapterId' => $this->chapter_id,
            'questionTypeId' => $this->question_type_id,
            'marks' => (Question::find($this->question_type_id)->question_type)->marks,
            'subjectId' => $this->subject_id,
            'question' => $this->question,
            'options' => OptionResource::collection(Question::find($this->id)->options)
        ];
    }
}
