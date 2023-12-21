<div class="header">
    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </button>
            <div class="theme-toggler">
                <span class="material-symbols-outlined active">
                    sunny
                </span>
                <span class="material-symbols-outlined">
                    dark_mode
                </span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Hey, <b><?php echo $hasil['nama'] ?></b></p>
                    <small class="text-muted">
                        <?php
                        if ($hasil['level'] == 1) {
                            echo "Super Admin";
                        } elseif ($hasil['level'] == 2) {
                            echo "administrators";
                        } elseif ($hasil['level'] == 3) {
                            echo "Operator";
                        } elseif ($hasil['level'] == 4) {
                            echo 'Kasir';
                        }
                        ?>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>