<div class="dashboard">
    <!-- <div class="top-dashboard">
        <a href="index.php" style="color: white;text-decoration: none;">
            <?php //echo strtoupper(siteName()); ?>
        </a>
    </div> -->
    <div class="bloc-logo">
        <a href="index.php" style="color: white;text-decoration: none;">
            <div><img src="photo/<?php echo $user['pic'] ?>" class='img-circle' style='width: 77px;height: 66px'></div>
            <div class="logo-name">
                <?php echo ucfirst($user['name']); ?>
            </div>
        </a>
    </div>
    <div class="main-navigation">MAIN NAVIGATION</div>
    <div>
        <div class="dashboard-name items"><span> <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 0 24 24" width="24px" fill="#ffffff">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                </svg> Dashboard</span></div>
        <div class="item">
            <ul class="nostyle zero">
                <li><a href="Pages/Home/Home.php" class="sidebar-link"><svg xmlns="http://www.w3.org/2000/svg"
                            height="20px" viewBox="0 0 24 24" width="20px" fill="#ffffff">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                        </svg> Home</a>
                </li>
                <li><a href="Pages/Inventory/Inventerie.php" class="sidebar-link"><svg
                            xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px"
                            fill="#ffffff">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M20 2H4c-1 0-2 .9-2 2v3.01c0 .72.43 1.34 1 1.69V20c0 1.1 1.1 2 2 2h14c.9 0 2-.9 2-2V8.7c.57-.35 1-.97 1-1.69V4c0-1.1-1-2-2-2zm-5 12H9v-2h6v2zm5-7H4V4l16-.02V7z" />
                        </svg>
                        Inventories</a></li>
                <li><a href="Pages/Categories/Categories.php" class="sidebar-link"><svg
                            xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px"
                            fill="#ffffff">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 2l-5.5 9h11z" />
                            <circle cx="17.5" cy="17.5" r="4.5" />
                            <path d="M3 13.5h8v8H3z" />
                        </svg>
                        Categories</a></li>

                <li><a href="Pages/Magazin/Magazin.php" class="sidebar-link"><svg xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px"
                            fill="#ffffff">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <path
                                    d="M22,3l-1.67,1.67L18.67,3L17,4.67L15.33,3l-1.66,1.67L12,3l-1.67,1.67L8.67,3L7,4.67L5.33,3L3.67,4.67L2,3v16 c0,1.1,0.9,2,2,2l16,0c1.1,0,2-0.9,2-2V3z M11,19H4v-6h7V19z M20,19h-7v-2h7V19z M20,15h-7v-2h7V15z M20,11H4V8h16V11z" />
                            </g>
                        </svg>
                        Magasin_IT</a>
                </li>
                <li>
                    <a id="todo_tasks" onclick="toggleTasks(event)" style="cursor:pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px"
                            viewBox="0 0 24 24" width="20px" fill="#ffffff">
                            <rect fill="none" height="24" width="24" />
                            <path
                                d="M22,5.18L10.59,16.6l-4.24-4.24l1.41-1.41l2.83,2.83l10-10L22,5.18z M19.79,10.22C19.92,10.79,20,11.39,20,12 c0,4.42-3.58,8-8,8s-8-3.58-8-8c0-4.42,3.58-8,8-8c1.58,0,3.04,0.46,4.28,1.25l1.44-1.44C16.1,2.67,14.13,2,12,2C6.48,2,2,6.48,2,12 c0,5.52,4.48,10,10,10s10-4.48,10-10c0-1.19-0.22-2.33-0.6-3.39L19.79,10.22z" />
                        </svg> ToDo Tasks
                    </a>
                    <ul id="sub_tasks" style="display: none;">
                        <li><a href="Pages/ToDoList/ToDo_CyberWatch.php" class="sidebar-link">Cyberwatch</a></li>
                        <li><a href="Pages/ToDoList/ToDo_Others.php" class="sidebar-link">Other</a></li>
                    </ul>
                </li>
                <li><a href="Pages/ToDoList/ToDo_Add.php" class="sidebar-link"><svg xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px"
                            fill="#ffffff">
                            <rect fill="none" height="24" width="24" />
                            <path
                                d="M22,5.18L10.59,16.6l-4.24-4.24l1.41-1.41l2.83,2.83l10-10L22,5.18z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8 c1.57,0,3.04,0.46,4.28,1.25l1.45-1.45C16.1,2.67,14.13,2,12,2C6.48,2,2,6.48,2,12s4.48,10,10,10c1.73,0,3.36-0.44,4.78-1.22 l-1.5-1.5C14.28,19.74,13.17,20,12,20z M19,15h-3v2h3v3h2v-3h3v-2h-3v-3h-2V15z" />
                        </svg> ADD
                        Tasks</a></li>
            </ul>
        </div>
    </div>
    <div class="other" style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC">
        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
            </svg> Other Menu</span>
    </div>
    <div class="item">
        <ul class="nostyle zero">
            <li><a href="Pages/Settings/WebSite_Settings.php" class="sidebar-link"><svg
                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px"
                        viewBox="0 0 24 24" width="20px" fill="#ffffff">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none" />
                            <path
                                d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
                        </g>
                    </svg>
                    Site Setting</a>
            </li>
            <li><a href="Pages/Settings/Profile_Settings.php" class="sidebar-link"> <svg
                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px"
                        viewBox="0 0 24 24" width="20px" fill="#ffffff">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                            <g>
                                <circle cx="10" cy="8" r="4" />
                                <path
                                    d="M10.67,13.02C10.45,13.01,10.23,13,10,13c-2.42,0-4.68,0.67-6.61,1.82C2.51,15.34,2,16.32,2,17.35V20h9.26 C10.47,18.87,10,17.49,10,16C10,14.93,10.25,13.93,10.67,13.02z" />
                                <path
                                    d="M20.75,16c0-0.22-0.03-0.42-0.06-0.63l1.14-1.01l-1-1.73l-1.45,0.49c-0.32-0.27-0.68-0.48-1.08-0.63L18,11h-2l-0.3,1.49 c-0.4,0.15-0.76,0.36-1.08,0.63l-1.45-0.49l-1,1.73l1.14,1.01c-0.03,0.21-0.06,0.41-0.06,0.63s0.03,0.42,0.06,0.63l-1.14,1.01 l1,1.73l1.45-0.49c0.32,0.27,0.68,0.48,1.08,0.63L16,21h2l0.3-1.49c0.4-0.15,0.76-0.36,1.08-0.63l1.45,0.49l1-1.73l-1.14-1.01 C20.72,16.42,20.75,16.22,20.75,16z M17,18c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S18.1,18,17,18z" />
                            </g>
                        </g>
                    </svg>
                    Profile Setting</a></li>
            <li><a href="Pages/Settings/Account_Settings.php" class="sidebar-link"> <svg
                        xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px"
                        fill="#ffffff">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    Account
                    Setting</a></li>
            <li><a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24"
                        width="20px" fill="#ffffff">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z" />
                    </svg> Sign Out</a></li>
        </ul>
    </div>
</div>