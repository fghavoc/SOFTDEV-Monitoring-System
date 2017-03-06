<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar3.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
            <?php echo
                '<p>'.Yii::$app->user->identity->username.' <br>
                <small>'.Yii::$app->user->identity->email.'</small>
                </p>'
            ?>
            
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Monitoring System', 'options' => ['class' => 'header']],
                    ['label' => 'Law and Order', 'icon' => 'fa  fa-legal', 'url' => ['/site/laworder']],
                    ['label' => 'Camp Management', 'icon' => 'fa fa-home', 'url' => ['/site/camp']],
                    ['label' => 'Food and Non-Food', 'icon' => 'fa fa-cutlery', 'url' => ['/site/food']],
                    ['label' => 'Dead and Missing', 'icon' => 'fa fa-users', 'url' => ['/site/deadmissing']],
                    ['label' => 'Logistics', 'icon' => 'fa  fa-ambulance', 'url' => ['/site/logistics']],
                    ['label' => 'Inventory', 'icon' => 'fa fa-archive', 'url' => ['/site/inventory']],
                    ['label' => 'Procurement', 'icon' => 'fa  fa-money', 'url' => ['/site/procurement']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Options',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Others',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Sign out', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
