<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\NFTC\Models;

use AlibabaCloud\Tea\Model;

class GetPromoteShareurlRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 助力活动的活动规则编码
    /**
     * @var string
     */
    public $promoteId;

    // 用户授权token
    /**
     * @var string
     */
    public $accessToken;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'promoteId'         => 'promote_id',
        'accessToken'       => 'access_token',
    ];

    public function validate()
    {
        Model::validateRequired('promoteId', $this->promoteId, true);
        Model::validateRequired('accessToken', $this->accessToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->promoteId) {
            $res['promote_id'] = $this->promoteId;
        }
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPromoteShareurlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['promote_id'])) {
            $model->promoteId = $map['promote_id'];
        }
        if (isset($map['access_token'])) {
            $model->accessToken = $map['access_token'];
        }

        return $model;
    }
}
