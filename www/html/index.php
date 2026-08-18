<!DOCTYPE html>
<html lang="en-US">
    <?php require 'base/head.php';?>
    <body>
        <!-- tiling background -->
        <?php require 'base/background.php';?>
        <!-- main content-->
        <div id="container">
            <?php require 'base/topbar.php';?>
            <?php require 'base/header.php';?>
            <div id="flex">
                <main>
                    <h1>about</h1>
                    <div id="flex-container">
                        <div id="column1">
                            <img id="mascot" src="/assets/images/mascot.png" alt="Munna with a top hat">
                        </div>
                        <div id="column2">
                            <p id="no-margin-top">
                                Brought to you by
                                <br>
                                <span class="rainbow-text">Striaton Lab Team</span>
                            </p>
                            <p id="no-margin-top">
                                established: 3/8/2026
                            </p>
                            <p id="no-margin-top">
                                version 1.3.0 releasing soonish tm!
                        </div>
                    </div>
                    <p>
                        Poké Transporter GB is a tool created to transfer Pokémon from Gen I and II Pokémon Games to Gen III Pokémon Games.
                    </p>
                    <p>
                        It is designed to emulate what GameFreak may have released should they persued it.     
                    </p>

                    <h1>screenshots</h1>
                    <img src="/assets/images/screenshots/1.png" alt="main menu" width="240" height="160">
                    <img src="/assets/images/screenshots/2.png" alt="dream dex" width="240" height="160">
                    <img src="/assets/images/screenshots/3.png" alt="dialogue" width="240" height="160">
                    <img src="/assets/images/screenshots/4.png" alt="game select" width="240" height="160">
                    <img src="/assets/images/screenshots/5.png" alt="box" width="240" height="160">

                    <h1>buttons</h1>
                    <a href="https://bluemoonfalls.com" target="_blank"><img src="/assets/images/buttons/blue_moon_falls.png" alt="blue moon falls" width="88" height="31"></a>
                    <a href="https://www.dragonflycave.com" target="_blank"><img src="/assets/images/buttons/the_cave_of_dragonflies.gif" alt="the cave of dragonflies" width="88" height="31"></a>
                    <a href="https://buriedrelic.neocities.org" target="_blank"><img src="/assets/images/buttons/buried_relic.png" alt="buried relic" width="88" height="31"></a>
                    <img src="/assets/images/buttons/best_viewed_with_a_cat.png" alt="best viewed with a cat" width="88" height="31">
                    <a href="https://badge.les.bi/" target="_blank"><img src="/assets/images/buttons/queer_trans.png" alt="queer trans" width="88" height="31"></a>
                    <img src="/assets/images/buttons/created_by_a_human_with_a_heart.png" alt="created by a human with a heart" width="88" height="31">
                    <img src="/assets/images/buttons/youre_telling_me_a_queer_coded_this.png" alt="you're telling me a queer coded this?" width="88" height="31">
                    <a href="https://www.debian.org/" target="_blank"><img src="/assets/images/buttons/powered_by_debian.gif" alt="powered by debian" width="88" height="31"></a>
                    <a href="https://www.php.net/" target="_blank"><img src="/assets/images/buttons/powered_by_php.gif" alt="powered by php" width="88" height="31"></a>
                    <a href="https://www.pokemon.com/" target="_blank"><img src="/assets/images/buttons/pokemon.gif" alt="pokemon" width="88" height="31"></a>
                </main>
                <?php require 'base/rightSidebar.php';?>
            </div>
        </div>

        <!-- scripts -->
        <?php require 'base/scripts.php';?>
    </body>
</html>