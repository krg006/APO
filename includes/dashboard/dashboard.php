<h1>Dashboard</h1>

<div class="dashboard">
    <div style="display: inline-block;">
        <ul class="left">
            <li>
                <?php include 'profile.php' ?>
            </li>
        </ul>
        <ul class="right">
            <li id="profile_card">
                <div class="profile_bar">
                    <span style="float: left; margin-left: 12px;"><?php echo user_get_first_name($_SESSION['username']) . ' ' . user_get_last_name($_SESSION['username']); ?></span>
                    <span class="navbar" style="float: right; padding: 0px 8px 0px 8px; cursor: pointer;">Log out</span>
                    <div style="margin: 8px 0px;  height: 18px; width: 1px; background: #cccccc; float: right;"></div>
                    <span class="navbar" style="float: right; padding: 0px 8px 0px 8px; cursor: pointer;">Make blog post</span>
                    <div style="margin: 8px 0px;  height: 18px; width: 1px; background: #cccccc; float: right;"></div>
                    <span class="navbar" style="float: right; padding: 0px 8px 0px 8px; cursor: pointer;">Create new event</span>
                </div>
            </li>
            <li>
                <?php include 'logbook.php' ?>
            </li>
            <li>
                <?php include 'upcoming_service_events.php' ?>
            </li>
        </ul>
        <br class="clear">
    </div>
</div>


