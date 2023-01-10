<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\picInfo\mainRegion;

use AlibabaCloud\Tea\Model;

class multiCategoryId extends Model
{
    /**
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 0.34
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'score'      => 'Score',
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
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiCategoryId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
