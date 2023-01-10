<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models;

use AlibabaCloud\Tea\Model;

class SearchByUrlRequest extends Model
{
    /**
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $crop;

    /**
     * @example Url,UserType
     *
     * @var string
     */
    public $fields;

    /**
     * @example 10
     *
     * @var int
     */
    public $num;

    /**
     * @example https://oss-test.oss-cn-shanghai.aliyuncs.com/xxxx.jpg
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example mm_xxx_xxx_xxx
     *
     * @var string
     */
    public $pid;

    /**
     * @example 280,486,232,351
     *
     * @var string
     */
    public $region;

    /**
     * @example 1125526
     *
     * @var int
     */
    public $relationId;

    /**
     * @example 0
     *
     * @var int
     */
    public $start;

    /**
     * @example 0
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'crop'       => 'Crop',
        'fields'     => 'Fields',
        'num'        => 'Num',
        'picUrl'     => 'PicUrl',
        'pid'        => 'Pid',
        'region'     => 'Region',
        'relationId' => 'RelationId',
        'start'      => 'Start',
        'userType'   => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchByUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
