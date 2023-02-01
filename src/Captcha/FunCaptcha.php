<?php

namespace Shapecode\AntiCaptcha\Captcha;

/**
 * Class FunCaptcha
 *
 * @package Shapecode\AntiCaptcha\Captcha
 * @author  Nikita Loges
 */
class FunCaptcha extends AbstractProxyCaptcha
{

    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'FunCaptchaTask';
    }

}