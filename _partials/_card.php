


<article class="container card1">

    <div class="image">
        <h3><?= $card["title"];?> <strong><span><?= $card["rs"];?></span> </strong><?php echo $card["price"];?></h3>

        <div class="back" style = "background-image: url(<?php echo $card["img"];?>);">

            <!-- Start HEART CHECKBOX-->
            <!-- Start HEART CHECKBOX-->

            <input type="checkbox" class="checkbox" id="<?php echo $card["id"];?>" />
            
            <label for="<?php echo $card["id"];?>">

                <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">

                    <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">

                        <path id="heart" 
                        style="fill: <?php if($card['favorite'] == true){'red'; }else {echo 'white';}?>"
                            d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                            fill="white" />
                    

                        <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                </svg>

            </label>

            <!-- END HEART CHECKBOX-->
            <!-- END HEART CHECKBOX-->

        </div>

    </div>

    <div>
        <div class="texte">

            <div class="container-icone">

                <div>
                    <img src="/assets/icone/icone/Surface.png" alt="" class="icone">
                    <span class="number"><?php echo $card["squaremeters"];?></span>
                </div>
                <div><img src="/assets/icone/icone/Bed.png" alt="" class="icone"><span class="number"><?php echo $card["room"];?></span>
                </div>
                <div><img src="/assets/icone/icone/Lounge.png" alt="" class="icone"><span class="number"><?php echo $card["salon"];?></span>
                </div>
                <div><img src="/assets/icone/icone/Bathtub.png" alt="" class="icone"><span class="number"><?php echo $card["bathroom"];?></span>
                </div>
                <div><img src="/assets/icone/icone/Lap Pool.png" alt="" class="icone"><span class="number"><?php echo $card["swimingpool"];?></span>
                </div>

            </div>

      <p class="">
            <?php echo $card["annonce"];?>
            </p>
            <div class="more">
                <div class="positionpush">
                    <div class="push"><a href="contact.php" target="_blank">More</a></div>
                </div>
                <div class="positionpush">
               

                    <div class="push "><a href="/_partials/contact.php" target="_blank"> Contact </a></div>
                </div>
            </div>
        </div>

    </div>

</article>
<!-- end card 1 -->

