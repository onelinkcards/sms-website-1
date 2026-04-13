<?php
/**
 * Cream announcement strip below hero — smooth infinite scroll, bullet separators.
 * First segment: bold CTA (reference: “Apply / Admitted? Let's make it official!”).
 */
$_mb_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_mb_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_mb_items = [
    ['lead' => true, 'href' => $_mb_apply, 'text' => 'Applied or enquiring? Let\'s make it official — start your admission.'],
    ['text' => 'BSc Nursing & GNM — affiliated with University of Jammu'],
    ['text' => 'Clinical training at Government Medical College, Jammu'],
    ['text' => 'JKBOPEE & management quota — counselling support on campus'],
    ['text' => 'Eight nursing labs · digital library · Wi‑Fi · hostel & transport'],
    ['text' => 'Campus: Babliana Jeevan Nagar Road, near Jammu Airport'],
    ['href' => $_mb_contact, 'text' => 'Questions? Call or email admissions anytime'],
];
?>
<div class="sms-marquee-band" role="region" aria-label="College announcements">
    <div class="sms-marquee-band__viewport">
        <div class="sms-marquee-band__track">
            <?php for ($_mb_g = 0; $_mb_g < 2; $_mb_g++) : ?>
            <div class="sms-marquee-band__group"<?php echo $_mb_g === 1 ? ' aria-hidden="true"' : ''; ?>>
                <?php
                foreach ($_mb_items as $_mb_i => $_mb_it) :
                    if ($_mb_i > 0) :
                        ?>
                <span class="sms-marquee-band__bullet" aria-hidden="true">&bull;</span>
                        <?php
                    endif;
                    if (!empty($_mb_it['lead'])) :
                        ?>
                <a class="sms-marquee-band__lead" href="<?php echo htmlspecialchars($_mb_it['href']); ?>"><?php echo htmlspecialchars($_mb_it['text']); ?></a>
                        <?php
                    elseif (!empty($_mb_it['href'])) :
                        ?>
                <a class="sms-marquee-band__link" href="<?php echo htmlspecialchars($_mb_it['href']); ?>"><?php echo htmlspecialchars($_mb_it['text']); ?></a>
                        <?php
                    else :
                        ?>
                <span class="sms-marquee-band__text"><?php echo htmlspecialchars($_mb_it['text']); ?></span>
                        <?php
                    endif;
                endforeach;
                ?>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
