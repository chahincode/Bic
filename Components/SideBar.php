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
                <li><a href="Pages/Home/Home.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Home</a></li>
                <li><a href="Pages/Inventory/Inventerie.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Inventories</a></li>
                <li><a href="Pages/Categories/Categories.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Categories</a></li>
<!--                <li><a href="PC_Assemblage.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> PC_Assemblage</a>-->
<!--                </li>-->
<!--                <li><a href="PC_Injection.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i>-->
<!--                        PC_Injection</a></li>-->
                <li><a href="Pages/Magazin/Magazin.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Magasin_IT</a>
                </li>
                <li>
                    <a  id="todo_tasks" onclick="toggleTasks(event)">
                        <i class="fa fa-circle-o fa-fw"></i> ToDo Tasks
                    </a>
                    <ul id="sub_tasks" style="display: none;">
                        <li><a href="Pages/ToDoList/ToDo_CyberWatch.php" class="sidebar-link">Cyberwatch</a></li>
                        <li><a href="Pages/ToDoList/ToDo_Others.php" class="sidebar-link">Other</a></li>
                    </ul>
                </li>
                <li><a href="Pages/ToDoList/ToDo_Add.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> ADD Tasks</a></li>
            </ul>
        </div>
    </div>
    <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i
                    class="fa fa-globe fa-fw"></i> Other Menu</span></div>
    <div class="item">
        <ul class="nostyle zero">
            <li><a href="sitesetting.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Site Setting</a>
            </li>
            <li><a href="profile.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Profile Setting</a></li>
            <li><a href="accountSetting.php" class="sidebar-link"><i class="fa fa-circle-o fa-fw"></i> Account
                    Setting</a></li>
            <li><a href="logout.php"><i class="fa fa-circle-o fa-fw"></i> Sign Out</a></li>
        </ul>
    </div>
</div>
