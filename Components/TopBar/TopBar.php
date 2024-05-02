<div class="top-bar">
    <div class="rightAccount">
        <div><img src="photo/<?php echo $user['pic'] ?>" style='width: 41px;height: 33px;' class='img-circle'></div>
        <div>
            <?php echo ucfirst($user['name']) ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="account" style="display: none;">
    <div style="background: #3C8DBC;padding: 22px;" class="center">
        <img src="photo/<?php echo $user['pic'] ?>" style='width: 100px;height: 100px; margin:auto;'
            class='img-circle img-thumbnail'>
        <br><br>
        <span style="font-size: 13pt;color:#CEE6F0">
            <?php echo $user['name'] ?>
        </span><br>
        <span style="color: #CEE6F0;font-size: 10pt">Member Since:
            <?php echo $user['date']; ?>
        </span>
    </div>
    <div style="padding: 11px;">
        <a href="profile.php">
            <button class="btn btn-default" style="border-radius:0">Profile</button>
            <a href="logout.php">
                <button class="btn btn-default pull-right" style="border-radius: 0">Sign Out</button>
            </a>
    </div>
</div>
<script src="Components/TopBar/Script.js"></script>