<?php
/**
 * Author: Jonas.Huang <jonas.huang@qq.com>
 * Date: 2018/7/20
 */

namespace silecs\yii2auth\cas;


class Session extends \yii\web\Session
{
    public function regenerateID($deleteOldSession = false)
    {
        //parent::regenerateID($deleteOldSession);
    }
}