<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\GetProductInfoByIdsResponseBody\data\auctions;

use AlibabaCloud\SDK\ImageSearch\V20210501\Models\GetProductInfoByIdsResponseBody\data\auctions\result\maxCommission;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $shortTitle;

    /**
     * @var string
     */
    public $subTitle;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $zkFinalPrice;

    /**
     * @var string
     */
    public $priceAfterCoupon;

    /**
     * @var int
     */
    public $userType;

    /**
     * @var string
     */
    public $provcity;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $sellerId;

    /**
     * @var int
     */
    public $volume;

    /**
     * @var string
     */
    public $levelOneCategoryName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $couponTotalCount;

    /**
     * @var int
     */
    public $couponRemainCount;

    /**
     * @var string
     */
    public $couponStartTime;

    /**
     * @var string
     */
    public $couponEndTime;

    /**
     * @var string
     */
    public $couponStartFee;

    /**
     * @var int
     */
    public $couponAmount;

    /**
     * @var string
     */
    public $couponInfo;

    /**
     * @var string
     */
    public $commissionRate;

    /**
     * @var string
     */
    public $couponShareUrl;

    /**
     * @var string
     */
    public $deeplinkCouponShareUrl;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $deeplinkUrl;

    /**
     * @var string
     */
    public $shopTitle;

    /**
     * @var maxCommission
     */
    public $maxCommission;
    protected $_name = [
        'itemId'                 => 'ItemId',
        'title'                  => 'Title',
        'shortTitle'             => 'ShortTitle',
        'subTitle'               => 'SubTitle',
        'picUrl'                 => 'PicUrl',
        'reservePrice'           => 'ReservePrice',
        'zkFinalPrice'           => 'ZkFinalPrice',
        'priceAfterCoupon'       => 'PriceAfterCoupon',
        'userType'               => 'UserType',
        'provcity'               => 'Provcity',
        'nick'                   => 'Nick',
        'sellerId'               => 'SellerId',
        'volume'                 => 'Volume',
        'levelOneCategoryName'   => 'LevelOneCategoryName',
        'categoryName'           => 'CategoryName',
        'couponTotalCount'       => 'CouponTotalCount',
        'couponRemainCount'      => 'CouponRemainCount',
        'couponStartTime'        => 'CouponStartTime',
        'couponEndTime'          => 'CouponEndTime',
        'couponStartFee'         => 'CouponStartFee',
        'couponAmount'           => 'CouponAmount',
        'couponInfo'             => 'CouponInfo',
        'commissionRate'         => 'CommissionRate',
        'couponShareUrl'         => 'CouponShareUrl',
        'deeplinkCouponShareUrl' => 'DeeplinkCouponShareUrl',
        'url'                    => 'Url',
        'deeplinkUrl'            => 'DeeplinkUrl',
        'shopTitle'              => 'ShopTitle',
        'maxCommission'          => 'MaxCommission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->shortTitle) {
            $res['ShortTitle'] = $this->shortTitle;
        }
        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->zkFinalPrice) {
            $res['ZkFinalPrice'] = $this->zkFinalPrice;
        }
        if (null !== $this->priceAfterCoupon) {
            $res['PriceAfterCoupon'] = $this->priceAfterCoupon;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->provcity) {
            $res['Provcity'] = $this->provcity;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->levelOneCategoryName) {
            $res['LevelOneCategoryName'] = $this->levelOneCategoryName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->couponTotalCount) {
            $res['CouponTotalCount'] = $this->couponTotalCount;
        }
        if (null !== $this->couponRemainCount) {
            $res['CouponRemainCount'] = $this->couponRemainCount;
        }
        if (null !== $this->couponStartTime) {
            $res['CouponStartTime'] = $this->couponStartTime;
        }
        if (null !== $this->couponEndTime) {
            $res['CouponEndTime'] = $this->couponEndTime;
        }
        if (null !== $this->couponStartFee) {
            $res['CouponStartFee'] = $this->couponStartFee;
        }
        if (null !== $this->couponAmount) {
            $res['CouponAmount'] = $this->couponAmount;
        }
        if (null !== $this->couponInfo) {
            $res['CouponInfo'] = $this->couponInfo;
        }
        if (null !== $this->commissionRate) {
            $res['CommissionRate'] = $this->commissionRate;
        }
        if (null !== $this->couponShareUrl) {
            $res['CouponShareUrl'] = $this->couponShareUrl;
        }
        if (null !== $this->deeplinkCouponShareUrl) {
            $res['DeeplinkCouponShareUrl'] = $this->deeplinkCouponShareUrl;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->deeplinkUrl) {
            $res['DeeplinkUrl'] = $this->deeplinkUrl;
        }
        if (null !== $this->shopTitle) {
            $res['ShopTitle'] = $this->shopTitle;
        }
        if (null !== $this->maxCommission) {
            $res['MaxCommission'] = null !== $this->maxCommission ? $this->maxCommission->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ShortTitle'])) {
            $model->shortTitle = $map['ShortTitle'];
        }
        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['ZkFinalPrice'])) {
            $model->zkFinalPrice = $map['ZkFinalPrice'];
        }
        if (isset($map['PriceAfterCoupon'])) {
            $model->priceAfterCoupon = $map['PriceAfterCoupon'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['Provcity'])) {
            $model->provcity = $map['Provcity'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['LevelOneCategoryName'])) {
            $model->levelOneCategoryName = $map['LevelOneCategoryName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CouponTotalCount'])) {
            $model->couponTotalCount = $map['CouponTotalCount'];
        }
        if (isset($map['CouponRemainCount'])) {
            $model->couponRemainCount = $map['CouponRemainCount'];
        }
        if (isset($map['CouponStartTime'])) {
            $model->couponStartTime = $map['CouponStartTime'];
        }
        if (isset($map['CouponEndTime'])) {
            $model->couponEndTime = $map['CouponEndTime'];
        }
        if (isset($map['CouponStartFee'])) {
            $model->couponStartFee = $map['CouponStartFee'];
        }
        if (isset($map['CouponAmount'])) {
            $model->couponAmount = $map['CouponAmount'];
        }
        if (isset($map['CouponInfo'])) {
            $model->couponInfo = $map['CouponInfo'];
        }
        if (isset($map['CommissionRate'])) {
            $model->commissionRate = $map['CommissionRate'];
        }
        if (isset($map['CouponShareUrl'])) {
            $model->couponShareUrl = $map['CouponShareUrl'];
        }
        if (isset($map['DeeplinkCouponShareUrl'])) {
            $model->deeplinkCouponShareUrl = $map['DeeplinkCouponShareUrl'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['DeeplinkUrl'])) {
            $model->deeplinkUrl = $map['DeeplinkUrl'];
        }
        if (isset($map['ShopTitle'])) {
            $model->shopTitle = $map['ShopTitle'];
        }
        if (isset($map['MaxCommission'])) {
            $model->maxCommission = maxCommission::fromMap($map['MaxCommission']);
        }

        return $model;
    }
}
