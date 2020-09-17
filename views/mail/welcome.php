<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;

/**
 * @var dektrium\user\Module $module
 * @var dektrium\user\models\User $user
 * @var dektrium\user\models\Token $token
 * @var bool $showPassword
 */
?>
<p>
    <?= Yii::t('user', 'Hello') ?>,
</p>

<p>
    <?= Yii::t('user', 'Your account on {0} has been created', Yii::$app->name) ?>.
    <?php if ($showPassword || $module->enableGeneratingPassword): ?>
        <?= Yii::t('user', 'We have generated a password for you') ?>: <strong><?= $user->password ?></strong>
    <?php endif ?>

</p>

<?php if ($token !== null): ?>
    <p>
        <?= Yii::t('user', 'In order to complete your registration, please click the link below') ?>.
    </p>
    <p>
        <?= Html::a(Html::encode($token->url), $token->url); ?>
    </p>
    <p>
        <?= Yii::t('user', 'If you cannot click the link, please try pasting the text into your browser') ?>.
    </p>
<?php endif ?>

<p>
    <?= Yii::t('user', 'If you did not make this request you can ignore this email') ?>.
</p>
