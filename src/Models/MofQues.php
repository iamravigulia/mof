<?php
namespace Edgewizz\Mof\Models;

use Illuminate\Database\Eloquent\Model;

class MofQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Mof\Models\MofAns', 'question_id');
    }
    protected $table = 'fmt_mof_ques';
}