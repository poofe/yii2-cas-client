<?php
/**
 * Author: Jonas.Huang <jonas.huang@qq.com>
 * Date: 2018/7/20
 */

namespace jonashuang\yii2casclient\cas;


class Session extends \yii\web\Session
{
    public function regenerateID($deleteOldSession = false)
    {
        //parent::regenerateID($deleteOldSession);
    }
}