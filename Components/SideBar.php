<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#222D32">
    <div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
        <a href="index.php" style="color: white;text-decoration: none;"><?php echo strtoupper(siteName()); ?> </a>
    </div>
    <div class="flex" style="padding: 3px 7px;margin:5px 2px;">
        <div><img src="photo/<?php echo $user['pic'] ?>" class='img-circle' style='width: 77px;height: 66px'></div>
        <div style="color:lightgreen;font-size: 13pt;padding: 14px 7px;margin-left: 11px;"><?php echo ucfirst($user['name']); ?></div>
    </div>
    <div style="background: #1A2226;font-size: 10pt;padding: 11px;color: #79978F">MAIN NAVIGATION</div>
    <div>
        <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i
                    class="fa fa-dashboard fa-fw"></i> Dashboard</span></div>
        <div class="item">
            <ul class="nostyle zero">
                <a href="index.php">
                    <li><i class="fa fa-circle-o fa-fw"></i> Home</li>
                </a>
                <a href="inventeriess.php">
                    <li><i class="fa fa-circle-o fa-fw"></i> Inventeries</li>
                </a>
                <a href="PC_Assemblage.php">
                    <li><i class="fa fa-circle-o fa-fw"></i> PC_Assemblage</li>
                </a>
                <!--    <a href="newsell"><li><i class="fa fa-circle-o fa-fw"></i> New Sell</li></a> -->
                <a href="PC_Injection.php">
                    <li><i class="fa fa-circle-o fa-fw"></i> PC_Injection</li>
                </a>
                <a href="InvotoriesMG.php">
                    <li><i class="fa fa-circle-o fa-fw"></i> Magasin_IT</li>
                </a>

                <a href="#" id="todo_tasks" onclick="toggleTasks(event)">
                    <li><i class="fa fa-circle-o fa-fw"></i> ToDo Tasks</li>
                </a>
                <ul id="sub_tasks" style="display: none;">
                    <li><a href="todo_taskspc.php">Cyberwatch</a></li>
                    <li><a href="todo_tasks.php">Other</a></li>
                </ul>


                <a href="add_tasks.php">
                    <li><i class="fa fa-circle-o fa-fw"></i> ADD Tasks</li>
                </a>

            </ul>
            <
        </div>
    </div>
    <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i
                class="fa fa-globe fa-fw"></i> Other Menu</span></div>
    <div class="item">
        <ul class="nostyle zero">
            <a href="sitesetting.php">
                <li><i class="fa fa-circle-o fa-fw"></i> Site Setting</li>
            </a>
            <a href="profile.php">
                <li><i class="fa fa-circle-o fa-fw"></i> Profile Setting</li>
            </a>
            <a href="accountSetting.php">
                <li><i class="fa fa-circle-o fa-fw"></i> Account Setting</li>
            </a>
            <a href="logout.php">
                <li><i class="fa fa-circle-o fa-fw"></i> Sign Out</li>
            </a>
        </ul>
        <
    </div>
</div>
