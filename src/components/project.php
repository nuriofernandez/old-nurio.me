<?php
$project_image = "https://i.imgur.com/UGfi8Fb.png";
$project_title = "Minecraft servers";
$project_site = "localhost/#2";

ob_start();
?>

<p class="card-text">
    Minecraft it's a sandbox game that allow users to create they own gamemodes. For a few years I created and owned a lot of servers. <b>NexusCraft</b>, <b>Lunatium</b>, <b>OceaNet</b>, <b>TempestPvP</b>, <b>EnergyPvP</b>, <b>MineGrech</b> and <b>Glaucus Network</b>.
</p>
<p class="card-text">
    I got more than <b>700 online</b> simultaneous players and more than <b>one million</b> registered players.
</p>

<?php
$project_description = ob_get_contents();
ob_end_clean();
?>

<div style="height:50px"></div>

<section>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-7">
                    <div class="card-img-bottom img-project-banner" style="color: #fff;height: 100%;min-height: 320px;background: url('<?php echo $project_image; ?>') center no-repeat;background-size: cover;"></div>
                </div>
                <div class="col-md-5">
                    <div class="card-block" style="padding: 38px; min-height: 20rem;">
                        <h4 class="card-title"><?php echo $project_title; ?></h4>
                        <?php echo $project_description; ?>
                        <a href="<?php echo $project_site; ?>" target="_blank" class="btn btn-primary mt-1">Go to the site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>