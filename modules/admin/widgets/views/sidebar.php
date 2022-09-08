
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div> <a href="<?=\yii\helpers\Url::to(['user/logout'])?>">
                <img src="/<?=Yii::$app->params['backend_files']?>/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </a>
        </div>
        <div>
            <h4 class="logo-text">Task</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/user'])?>">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Foydalanuvchilar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/candidates'])?>">
                <div class="parent-icon"><i class="bx bxs-user-voice"></i>
                </div>
                <div class="menu-title">Nomzodlar</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>